<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('banner_model');
        $this->load->model('product_model');
    }

    public function index() {
        $data['title'] = "Home | Adney's Shop";
        $data['banner_slide'] = $this->banner_model->tampil_slide_banner();
        $data['produk_home'] = $this->product_model->tampil_produk_home(8);
        if ($this->session->userdata('id_status') == 1) {
            redirect('admin/homes');
        } else {
            $this->load->view('public/home', $data);
        }
    }

}

?>
