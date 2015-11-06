<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_managements extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->model('brand_model');
    }

    public function index() {
        if ($this->session->userdata('is_login')) {
            $data['title'] = "Product List | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $data['product_list'] = $this->product_model->all_products()->result();
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/product/product_management_list', $data);
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
            $data['title'] = "Add Product | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $data['category'] = $this->product_model->get_dropdown_list();
            $data['brands'] = $this->brand_model->get_dropdown_list();
            $data['error'] = "";
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/product/product_management_add', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process_add($id_product = null) {
        $this->form_validation->set_rules('product_name', 'Product Name', 'required');
        $this->form_validation->set_rules('product_description', 'Product Description', 'required');
        $this->form_validation->set_rules('product_price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('processor', 'Processor', 'required');
        $this->form_validation->set_rules('product_stock', 'Product Stock', 'required|numeric');
        $this->form_validation->set_rules('id_category', 'Product Category', 'required');
        $this->form_validation->set_rules('id_brand', 'Product Brand', 'required');
        $this->form_validation->set_rules('product_status', 'Product Status', 'required');
        $this->form_validation->set_rules('memory', 'Memory (RAM)', 'required');
        $this->form_validation->set_rules('vga', 'VGA (Type Graphics)', 'required');
        $this->form_validation->set_rules('screen', 'Screen Size', 'required');
        $this->form_validation->set_rules('os', 'Operating System', 'required');
        $this->form_validation->set_rules('storage', 'Storage', 'required');
        $this->form_validation->set_rules('color', 'Color', 'required');
        if ($this->form_validation->run() == TRUE) {
            //upload image    
            $config['upload_path'] = './upload/produk/';
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

                $data['id_category'] = $this->input->post('id_category');
                $data['id_brand'] = $this->input->post('id_brand');
                $input_nama_produk = $this->input->post('product_name');
                $ganti = array("'");
                $oleh = "&#039;";
                $nama_produk = str_replace($ganti, $oleh, $input_nama_produk);
                $data['product_name'] = $nama_produk;
                $url_title = url_title($nama_produk);
                $data['permalink'] = $url_title;
                $input_deskripsi = $this->input->post('product_description');
                $data['product_description'] = str_replace($ganti, $oleh, $input_deskripsi);
                $data['product_price'] = $this->input->post('product_price');
                $data['processor'] = $this->input->post('processor');
                $data['product_stock'] = $this->input->post('product_stock');
                $data['created_at'] = date('Y-m-d H:i:s', time() + 60 * 60 * 5);
                $data['product_status'] = $this->input->post('product_status');
                $codeproduct = substr($nama_produk, 0, 3);
                $lastcode = substr($nama_produk, -3);
                $data['product_code'] = strtoupper($codeproduct.$data['id_category'].$lastcode);
                $data['memory'] = $this->input->post('memory');
                $data['vga'] = $this->input->post('vga');
                $data['screen'] = $this->input->post('screen');
                $data['os'] = $this->input->post('os');
                $data['storage'] = $this->input->post('storage');
                $data['color'] = $this->input->post('color');
                
                $this->product_model->add_product($data);

                $data['user_name'] = $this->session->userdata('user_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Product ' . $this->input->post('product_name') . ' Success Added </div>');
                redirect('admin/product_managements', $data);
            } else {
                $data['error'] = $this->upload->display_errors();
                $data['title'] = "Add Product | Adney's Shop";
                $data['user_name'] = $this->session->userdata('user_name');
                $data['category'] = $this->product_model->get_dropdown_list();
                $data['brands'] = $this->brand_model->get_dropdown_list();
                $this->load->view('admin/product/product_management_add', $data);
            }
        } else {
            $data['error'] = $this->upload->display_errors();
            $data['title'] = "Add Product | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $data['category'] = $this->product_model->get_dropdown_list();
            $data['brands'] = $this->brand_model->get_dropdown_list();
            $this->load->view('admin/product/product_management_add', $data);
        }
    }

    public function _resize_produk($fulpat) {
        $config['source_image'] = './upload/produk/' . $fulpat;
        $config['new_image'] = './upload/produk/' . $fulpat;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 800;
        $config['height'] = 600;
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }
    }

    public function _create_thumb_produk($fulpet) {
        $config['source_image'] = './upload/produk/' . $fulpet;
        $config['new_image'] = './upload/produk/thumb/' . $fulpet;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 200;
        //$config['height'] = 200;
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo "tum" . $this->image_lib->display_errors();
        }
    }

    public function gotoFormEdit($id_product) {
        if ($this->session->userdata('is_login')) {
            $data['idProduct'] = $id_product;
            $data['user_name'] = $this->session->userdata('user_name');
            $data['title'] = "Edit Product | Adney's Shop";
            $data['category'] = $this->product_model->get_dropdown_list();
            $data['brands'] = $this->brand_model->get_dropdown_list();
            $data['dataproducts'] = $this->product_model->getProductById($id_product);
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/product/product_management_edit', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process_edit() {
        $id_product = $this->input->post('id_product');

        $this->form_validation->set_rules('product_name', 'Product Name', 'required');
        $this->form_validation->set_rules('product_description', 'Product Description', 'required');
        $this->form_validation->set_rules('product_price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('processor', 'Processor', 'required');
        $this->form_validation->set_rules('product_stock', 'Product Stock', 'required|numeric');
        $this->form_validation->set_rules('id_category', 'Product Category', 'required');
        $this->form_validation->set_rules('id_brand', 'Product Brand', 'required');
        $this->form_validation->set_rules('product_status', 'Product Status', 'required');
        $this->form_validation->set_rules('memory', 'Memory (RAM)', 'required');
        $this->form_validation->set_rules('vga', 'VGA (Type Graphics)', 'required');
        $this->form_validation->set_rules('screen', 'Screen Size', 'required');
        $this->form_validation->set_rules('os', 'Operating System', 'required');
        $this->form_validation->set_rules('storage', 'Storage', 'required');
        $this->form_validation->set_rules('color', 'Color', 'required');
        if ($this->form_validation->run() == TRUE) {
            //upload image    
            $config['upload_path'] = './upload/produk/';
            $config['allowed_types'] = "gif|jpeg|png|jpg";
            $config['max_size'] = 2000;
            $config['max_height'] = 2000;
            $config['max_width'] = 2000;
            $config['overwrite'] = TRUE;
            $dok = '';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                //unlink gambar
                $query = $this->product_model->select_by_id($id_product)->row();
                if ($query->product_image != "" || $query->product_image != NULL) {
                    if (file_exists('./upload/produk/' . $query->product_image) || file_exists('./upload/produk/thumb/' . $query->product_image_thumb)) {
                        $do = unlink('./upload/produk/' . $query->product_image); //menghapus gambar semula di folder
                        $do = unlink('./upload/produk/thumb/' . $query->product_image_thumb); //menghapus gambar semula di folder thumb
                    }
                }
                $dok = $this->upload->data();
                $this->_resize_produk($dok['file_name']);
                $this->_create_thumb_produk($dok['file_name']);
                $data['gambar'] = $dok['file_name'];
                $data['gambartumb'] = $dok['file_name'];

                $data['id_category'] = $this->input->post('id_category');
                $data['id_brand'] = $this->input->post('id_brand');
                $input_nama_produk = $this->input->post('product_name');
                $ganti = array("'");
                $oleh = "&#039;";
                $nama_produk = str_replace($ganti, $oleh, $input_nama_produk);
                $data['product_name'] = $nama_produk;
                $url_title = url_title($nama_produk);
                $data['permalink'] = $url_title;
                $input_deskripsi = $this->input->post('product_description');
                $data['product_description'] = str_replace($ganti, $oleh, $input_deskripsi);
                $data['product_price'] = $this->input->post('product_price');
                $data['processor'] = $this->input->post('processor');
                $data['product_stock'] = $this->input->post('product_stock');
                $data['modified_at'] = date('Y-m-d H:i:s', time() + 60 * 60 * 5);
                $data['product_status'] = $this->input->post('product_status');
                $codeproduct = substr($nama_produk, 0, 3);
                $lastcode = substr($nama_produk, -3);
                $data['product_code'] = strtoupper($codeproduct.$data['id_category'].$lastcode);
                $data['memory'] = $this->input->post('memory');
                $data['vga'] = $this->input->post('vga');
                $data['screen'] = $this->input->post('screen');
                $data['os'] = $this->input->post('os');
                $data['storage'] = $this->input->post('storage');
                $data['color'] = $this->input->post('color');

                $this->product_model->updateProductFoto($id_product, $data);
                $data['user_name'] = $this->session->userdata('user_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Product ' . $this->input->post('product_name') . ' Success Updated </div>');
                redirect('admin/product_managements', $data);
            } else {
                $data['id_category'] = $this->input->post('id_category');
                $data['id_brand'] = $this->input->post('id_brand');
                $input_nama_produk = $this->input->post('product_name');
                $ganti = array("'");
                $oleh = "&#039;";
                $nama_produk = str_replace($ganti, $oleh, $input_nama_produk);
                $data['product_name'] = $nama_produk;
                $url_title = url_title($nama_produk);
                $data['permalink'] = $url_title;
                $input_deskripsi = $this->input->post('product_description');
                $data['product_description'] = str_replace($ganti, $oleh, $input_deskripsi);
                $data['product_price'] = $this->input->post('product_price');
                $data['processor'] = $this->input->post('processor');
                $data['product_stock'] = $this->input->post('product_stock');
                $data['modified_at'] = date('Y-m-d H:i:s', time() + 60 * 60 * 5);
                $data['product_status'] = $this->input->post('product_status');
                $codeproduct = substr($nama_produk, 0, 3);
                $lastcode = substr($nama_produk, -3);
                $data['product_code'] = strtoupper($codeproduct.$data['id_category'].$lastcode);
                $data['memory'] = $this->input->post('memory');
                $data['vga'] = $this->input->post('vga');
                $data['screen'] = $this->input->post('screen');
                $data['os'] = $this->input->post('os');
                $data['storage'] = $this->input->post('storage');
                $data['color'] = $this->input->post('color');

                $this->product_model->updateProductTanpaFoto($id_product, $data);
                $data['user_name'] = $this->session->userdata('user_name');
                $this->session->set_flashdata('message', '<div class="alert alert-success"> Data Product ' . $this->input->post('product_name') . ' Success Updated </div>');
                redirect('admin/product_managements', $data);
            }
        }
        $data['idProduct'] = $id_product;
        $data['brands'] = $this->brand_model->get_dropdown_list();
        $data['title'] = "Edit Product | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $data['category'] = $this->product_model->get_dropdown_list();
        $data['dataproducts'] = $this->product_model->getProductById($id_product);
        $this->load->view('admin/product/product_management_edit', $data);
    }

    public function delete($id_product) {
        if (empty($id_product)) {
            $this->session->set_flashdata('message', 'Error Invalid Product');
            redirect('admin/product_managements');
        } else {
            $query = $this->product_model->select_by_id($id_product)->row();
            if ($query->product_image != "" || $query->product_image != NULL) {
                if (file_exists('./upload/produk/' . $query->product_image) || file_exists('./upload/produk/thumb/' . $query->product_image_thumb)) {
                    $do = unlink('./upload/produk/' . $query->product_image); //menghapus gambar semula di folder
                    $do = unlink('./upload/produk/thumb/' . $query->product_image_thumb); //menghapus gambar semula di folder thumb
                }
            }
            $this->product_model->delete_product($id_product);
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Success! Product Deleted </div>');
            redirect('admin/product_managements');
        }
    }

    public function gotoFormView($id_product) {
        if ($this->session->userdata('is_login')) {
            $data['title'] = "View Data Product | Adney's Shop";
            $data['idProduct'] = $id_product;
            $data['user_name'] = $this->session->userdata('user_name');
            $data['category'] = $this->product_model->get_dropdown_list();
            $data['brands'] = $this->brand_model->get_dropdown_list();
            $data['dataproducts'] = $this->product_model->getProductById($id_product);
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/product/product_management_view', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

}

?>