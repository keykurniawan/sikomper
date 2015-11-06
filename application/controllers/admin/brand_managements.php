<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Brand_managements extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('brand_model');
    }
    
    public function index() {
        if ($this->session->userdata('is_login')) {
            $data['title'] = "Brand List | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $data['brands'] = $this->brand_model->select_all()->result();
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/product/brand_management_list', $data);
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
            $data['title'] = "Add Brand | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/product/brand_management_add', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process_add($action, $id_brand = null) {
        $this->form_validation->set_rules('name', 'Brand Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required');
        if ($this->form_validation->run() == TRUE) {
            if ($action == 'add') {
                $this->brand_model->add_brand();
            }
            $data['user_name'] = $this->session->userdata('user_name');
            $data['brands'] = $this->brand_model->select_all()->result();
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Brand ' . $this->input->post('name') . ' Success Added </div>');
            redirect('admin/brand_managements', $data);
        } else {
            $data['title'] = "Add Brand | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/product/brand_management_add', $data);
        }
    }

    public function delete($id_brand) {
        if (empty($id_brand)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Error Invalid Brand </div>');
            redirect('admin/brand_managements');
        } else {
            $this->brand_model->delete($id_brand);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Success Deleted Brand </div>');
            redirect('admin/brand_managements');
        }
    }

    public function edit($id_brand) {
        if ($this->session->userdata('is_login')) {
            $data['idBrand'] = $id_brand;
            $data['title'] = "Edit Brand | Adney's Shop";
            $data['brands'] = $this->brand_model->getBrandById($id_brand);
            $data['user_name'] = $this->session->userdata('user_name');
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/product/brand_management_edit', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }
    
    public function process() {
        $this->form_validation->set_rules('name', 'Brand Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $hasil = $this->brand_model->update_brand($this->input->post('id_brand'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Brand ' . $this->input->post('name') . ' Success Update </div>');
                redirect('admin/brand_managements');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> Brand ' . $this->input->post('name') . ' Failed Update </div>');
                redirect('admin/brand_managements');
            }
        } else {
            $data['idBrand'] = $this->input->post('id_brand');
            $data['title'] = "Edit Brand | Adney's Shop";
            $data['brands'] = $this->brand_model->getBrandById($this->input->post('id_brand'));
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('admin/product/brand_management_edit', $data);
        }
    }
}

?>
