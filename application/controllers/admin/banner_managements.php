<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Banner_managements extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('banner_model');
    }

    public function index() {
        if ($this->session->userdata('is_login')) {
            $data['title'] = "Banner List | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $data['banner_list'] = $this->banner_model->select_all()->result();
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/banner/banner_management_list', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function gotoFormAdd() {
        if ($this->session->userdata('is_login')) {
            $data['title'] = "Add Banner | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $data['error'] = "";
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/banner/banner_management_add', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process_add($id_banner = NULL) {
        $this->form_validation->set_rules('title_banner', 'Title Banner', 'required');
        $this->form_validation->set_rules('description_banner', 'Description Banner', 'required');
        $this->form_validation->set_rules('status_banner', 'Status Banner', 'required');
        if ($this->form_validation->run() == TRUE) {
            //upload image
            $config['upload_path'] = './upload/banner/';
            $config['allowed_types'] = "gif|jpeg|png|jpg";
            $config['max_size'] = 2000;
            $config['max_height'] = 2000;
            $config['max_width'] = 2000;
            $config['overwrite'] = TRUE;
            $dok = '';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $dok = $this->upload->data();
                $this->_resize_produk($dok['file_name']);
                $this->_create_thumb_produk($dok['file_name']);
                $data['gambar'] = $dok['file_name'];
                $data['gambartumb'] = $dok['file_name'];

                $judul_banner = $this->input->post('title_banner');
                $ganti = array("'");
                $oleh = "&#039;";
                $data['title_banner'] = str_replace($ganti, $oleh, $judul_banner);
                $input_deskripsi = $this->input->post('description_banner');
                $data['description_banner'] = str_replace($ganti, $oleh, $input_deskripsi);
                $data['status_banner'] = $this->input->post('status_banner');
                $data['created_at'] = date('Y-m-d H:i:s', time() + 60 * 60 * 5);

                $this->banner_model->add_banner($data);
                $data['user_name'] = $this->session->userdata('user_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Banner Success Added </div>');
                redirect('admin/banner_managements', $data);
            } else {
                $data['error'] = $this->upload->display_errors();
                $data['title'] = "Add Banner | Adney's Shop";
                $data['user_name'] = $this->session->userdata('user_name');
                $this->load->view('admin/banner/banner_management_add', $data);
            }
        } else {
            $data['error'] = $this->upload->display_errors();
            $data['title'] = "Add Banner | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/banner/banner_management_add', $data);
        }
    }

    public function _resize_produk($fulpat) {
        $config['source_image'] = './upload/banner/' . $fulpat;
        $config['new_image'] = './upload/banner/' . $fulpat;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 650;
        $config['height'] = 350;
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }
    }

    public function _create_thumb_produk($fulpet) {
        $config['source_image'] = './upload/banner/' . $fulpet;
        $config['new_image'] = './upload/banner/thumb/' . $fulpet;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 200;
        //$config['height'] = 200;
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo "tum" . $this->image_lib->display_errors();
        }
    }

    public function gotoFormEdit($id_banner) {
        if ($this->session->userdata('is_login')) {
            $data['idBanner'] = $id_banner;
            $data['user_name'] = $this->session->userdata('user_name');
            $data['title'] = "Edit Banner | Adney's Shop";
            $data['error'] = "";
            $data['databanner'] = $this->banner_model->getBannerById($id_banner);
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/banner/banner_management_edit', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process_edit() {
        $id_banner = $this->input->post('id_banner');

        $this->form_validation->set_rules('title_banner', 'Title Banner', 'required');
        $this->form_validation->set_rules('description_banner', 'Description Banner', 'required');
        $this->form_validation->set_rules('status_banner', 'Status Banner', 'required');
        if ($this->form_validation->run() == TRUE) {
            //upload image
            $config['upload_path'] = './upload/banner/';
            $config['allowed_types'] = "gif|jpeg|png|jpg";
            $config['max_size'] = 2000;
            $config['max_height'] = 2000;
            $config['max_width'] = 2000;
            $config['overwrite'] = TRUE;
            $dok = '';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                //unlink gambar
                $query = $this->banner_model->select_by_id($id_banner)->row();
                if ($query->image_banner != "" || $query->image_banner != NULL) {
                    if (file_exists('./upload/banner/' . $query->image_banner) || file_exists('./upload/banner/thumb/' . $query->image_banner)) {
                        $do = unlink('./upload/banner/' . $query->image_banner); //menghapus gambar semula di folder
                        $do = unlink('./upload/banner/thumb/' . $query->image_banner); //menghapus gambar semula di folder thumb
                    }
                }
                $dok = $this->upload->data();
                $this->_resize_produk($dok['file_name']);
                $this->_create_thumb_produk($dok['file_name']);
                $data['gambar'] = $dok['file_name'];
                $data['gambartumb'] = $dok['file_name'];

                $judul_banner = $this->input->post('title_banner');
                $ganti = array("'");
                $oleh = "&#039;";
                $data['title_banner'] = str_replace($ganti, $oleh, $judul_banner);
                $input_deskripsi = $this->input->post('description_banner');
                $data['description_banner'] = str_replace($ganti, $oleh, $input_deskripsi);
                $data['status_banner'] = $this->input->post('status_banner');
                $data['modified_at'] = date('Y-m-d H:i:s', time() + 60 * 60 * 5);

                $this->banner_model->updateBannerFoto($id_banner, $data);
                $data['user_name'] = $this->session->userdata('user_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Banner Success Updated </div>');
                redirect('admin/banner_managements', $data);
            } else {
                $judul_banner = $this->input->post('title_banner');
                $ganti = array("'");
                $oleh = "&#039;";
                $data['title_banner'] = str_replace($ganti, $oleh, $judul_banner);
                $input_deskripsi = $this->input->post('description_banner');
                $data['description_banner'] = str_replace($ganti, $oleh, $input_deskripsi);
                $data['status_banner'] = $this->input->post('status_banner');
                $data['modified_at'] = date('Y-m-d H:i:s', time() + 60 * 60 * 5);

                $this->banner_model->updateBannerTanpaFoto($id_banner, $data);
                $data['user_name'] = $this->session->userdata('user_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Banner Success Updated </div>');
                redirect('admin/banner_managements', $data);
            }
        }
        $data['idBanner'] = $id_banner;
        $data['user_name'] = $this->session->userdata('user_name');
        $data['title'] = "Edit Banner | Adney's Shop";
        $data['databanner'] = $this->banner_model->getBannerById($id_banner);
        $this->load->view('admin/banner/banner_management_edit', $data);
    }

    public function delete($id_banner) {
        if (empty($id_banner)) {
            $this->session->set_flashdata('message', 'Error Invalid Product');
            redirect('admin/banner_managements');
        } else {
            $query = $this->banner_model->select_by_id($id_banner)->row();
            if ($query->image_banner != "" || $query->image_banner != NULL) {
                if (file_exists('./upload/banner/' . $query->image_banner) || file_exists('./upload/banner/thumb/' . $query->image_banner)) {
                    $do = unlink('./upload/banner/' . $query->image_banner); //menghapus gambar semula di folder
                    $do = unlink('./upload/banner/thumb/' . $query->image_banner); //menghapus gambar semula di folder thumb
                }
            }
            $this->banner_model->delete_banner($id_banner);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Success! Banner Deleted </div>');
            redirect('admin/banner_managements');
        }
    }

    public function gotoFormView($id_banner) {
        if ($this->session->userdata('is_login')) {
            $data['title'] = "View Data Banner | Adney's Shop";
            $data['idBanner'] = $id_banner;
            $data['user_name'] = $this->session->userdata('user_name');
            $data['databanner'] = $this->banner_model->getBannerById($id_banner);
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/banner/banner_management_view', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

}
