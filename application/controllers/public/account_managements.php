<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account_managements extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('states_model');
        $this->load->model('country_model');
    }

    public function index() {
        if ($this->session->userdata('is_login')) {
            $data['title'] = "My Account | Adney's Shop";
            $data['states_list'] = $this->states_model->get_dropdown_list();
            $data['users'] = $this->users_model->get_user_by_id($this->session->userdata('id_user'));
            $data['country_list'] = $this->country_model->get_dropdown_list();
            $this->load->view('public/myaccount/account', $data);
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process() {
        $this->form_validation->set_rules('user_name', 'Username', 'required');
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('user_phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('first_address', 'First Address', 'required');
        $this->form_validation->set_rules('user_city', 'City', 'required');
        $this->form_validation->set_rules('user_zip', 'Zip Code', 'required');
        $this->form_validation->set_rules('id_country', 'Country', 'required');
        $this->form_validation->set_rules('user_agree', 'Your Agree', 'required');
        if (($this->input->post('user_password')) || ($this->input->post('confirm_password'))) {
            $this->form_validation->set_rules('user_password', 'Password', 'required|matches[confirm_password]');
            $this->form_validation->set_rules('confirm_password', 'Retype Password', 'required');
        }
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $hasil = $this->users_model->update_admin($this->input->post('id_user'));
            var_dump($hasil);
            if ($hasil == TRUE) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"> User ' . $this->input->post('user_name') . ' Success Update </div>');
                redirect('public/account_managements');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-error"> User ' . $this->input->post('user_name') . ' Failed Update </div>');
                redirect('public/account_managements');
            }
        } else {
            $data['title'] = "My Account | Adney's Shop";
            $data['states_list'] = $this->states_model->get_dropdown_list();
            $data['users'] = $this->users_model->get_user_by_id($this->session->userdata('id_user'));
            $data['country_list'] = $this->country_model->get_dropdown_list();
            $this->load->view('public/myaccount/account', $data);
        }
    }

}

?>
