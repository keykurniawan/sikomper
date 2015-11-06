<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->library('cart');
    }

    public function index($orderby="", $sort="") {
        $url_pagging = (is_numeric($orderby) || $orderby=="")?base_url() . 'public/products/index':base_url() . 'public/products/index/'.$orderby.'/'.$sort;
        $limit = 15;
        if(is_numeric($orderby) || $orderby==""){
            $offset = ($this->uri->segment(4) == '') ? 0 : $this->uri->segment(4);
            $filter = "nama";
            $sort = "asc";
            $config['uri_segment'] = 4;
        } else {
            $offset = ($this->uri->segment(6) == '') ? 0 : $this->uri->segment(6);
            $filter = $orderby;
            $sort = $sort;
            $config['uri_segment'] = 6;
        }
        $data['filter'] = $filter;
        $data['sort'] = $sort;
        $data['title'] = "Product | Adney's Shop";
        $data['list_category'] = $this->category_model->select_all()->result();
        $data['products'] = $this->product_model->select_all($limit, $offset, $filter, $sort);
        $data['total'] = $this->product_model->count_all();
        $config['base_url'] = $url_pagging;
        $config['total_rows'] = $data['total'];
        $config['per_page'] = $limit;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $this->load->view('public/product/index', $data);
    }
    
    public function search() {
        print_r($_POST);
    }

    public function category($permalink, $orderby="", $sort="") {
        $url_pagging = (is_numeric($orderby) || $orderby=="")?base_url() . 'public/products/category/' . $permalink . '/':base_url() . 'public/products/category/' .$permalink. '/'.$orderby.'/'.$sort;
        $limit = 15;
        if(is_numeric($orderby) || $orderby==""){
            $offset = ($this->uri->segment(5) == '') ? 0 : $this->uri->segment(5);
            $filter = "nama";
            $sort = "asc";
            $config['uri_segment'] = 5;
        } else {
            $offset = ($this->uri->segment(7) == '') ? 0 : $this->uri->segment(7);
            $filter = $orderby;
            $sort = $sort;
            $config['uri_segment'] = 7;
        }
        $data['category'] = $this->category_model->getCategoryByPermalink($permalink);
        $products = $this->product_model->select_by_categoryid($data['category']['id_category'], $limit, $offset, $filter, $sort);
        if (empty($products)) {
            $this->session->set_flashdata('error', 'There is no item in this category');
            redirect('public/products');
        }
        $data['filter'] = $filter;
        $data['sort'] = $sort;        
        $data['products'] = $this->product_model->select_by_categoryid($data['category']['id_category'], $limit, $offset, $filter, $sort);
        $data['list_category'] = $this->category_model->select_all()->result();
        $data['total'] = $this->product_model->count_all();
        $data['title'] = "Product Category | Adney's Shop";
        $config['total_rows'] = count($products);
        $config['per_page'] = $limit;
        $config['base_url'] = $url_pagging;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $this->load->view('public/product/category', $data);
    }

    public function detail($permalink) {
        $data['product'] = $this->product_model->getProductByPermalink($permalink);
        $data['featured'] = $this->product_model->tampil_produk_home(7);
        if (empty($data['product'])) {
            $this->session->set_flashdata('error', 'Invalid product');
            redirect('public/products');
        }
        $data['title'] = "Product Detail | Adney's Shop";
        $data['reviews'] = $this->product_model->get_komentar($data['product'] ['id_product'])->result();
        $data['totalreviews'] = $this->product_model->get_total_komentar($data['product'] ['id_product']);
        $this->load->view('public/product/detail', $data);
    }

    public function add_komentar($id_komentar = NULL) {
        $this->form_validation->set_rules('komentar', 'Komentar', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data['komentar'] = $this->input->post('komentar');
            $data['id_product'] = $this->input->post('id_product');
            $data['id_user'] = $this->input->post('id_user');
            $data['created_at'] = date('Y-m-d H:i:s', time() + 60 * 60 * 5);
            $data['created_by'] = $this->input->post('created_by');

            $this->product_model->add_komentar($data);

            $data['user_name'] = $this->session->userdata('user_name');
            $data['product'] = $this->product_model->getProductByPermalink($this->input->post('permalink'));
            $data['featured'] = $this->product_model->tampil_produk_home(4);
            $data['title'] = "Product Detail | Adney's Shop";
            $datap['permalink'] = $this->input->post('permalink');
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Review Success Added </div>');
            redirect($_SERVER['HTTP_REFERER'], $data);
        } else {
            $data['product'] = $this->product_model->getProductByPermalink($this->input->post('permalink'));
            $data['error'] = $this->upload->display_errors();
            $data['featured'] = $this->product_model->tampil_produk_home(4);
            $data['title'] = "Add Product | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $this->load->view('public/product/detail', $data);
        }
    }
    
    function add_cart($permalink) {
        $product = $this->product_model->getProductByPermalink($permalink);

        $data = array(
            'id' => $product['id_product'],
            'qty' => 1,
            'price' => $product['product_price'],
            'name' => $product['product_name'],
            'product_code' => $product['product_code'],
            'stock' => $product['product_stock'],
            'link' => $product['permalink'],
            'options' => array('pic' => $product['product_image_thumb'])
        );
        
        $data['title'] = "Shoping Cart | Adney's Shop";

        if ($this->cart->insert($data)) {
            $this->session->set_flashdata('success', 'Item has  added to cart');
            redirect('public/carts/', $data);
        }
    }

}

?>
