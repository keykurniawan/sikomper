<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carts extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = "Shopping Cart | Adney's Shop";
        $this->load->view('public/cart/index', $data);
    }
    
    function delete($rowId) {
        $data = array('rowid' => $rowId, 'qty' => 0);

        $this->cart->update($data);
        $this->session->set_flashdata('success', 'Item deleted');
        redirect('public/carts');
    }

    function update() {

        $this->cart->update($_POST);
        $this->session->set_flashdata('success', 'Shopping cart updated');
        redirect('public/carts');
    }
}
