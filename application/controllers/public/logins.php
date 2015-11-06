<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logins extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {
        $data['title'] = "Sign In | Adney's Shop";
        $this->load->view('public/login', $data);
    }

    public function process_login() {
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $user_email = $this->input->post('user_email');
            $user_password = $this->input->post('user_password');

//            $user = $this->users_model->check_login($user_email, $user_password);
            $user = $this->users_model->checkLogin($user_email, $user_password);
            if (!empty($user)) {
//                $query = $this->users_model->get_users($user_email, $user_password);
//                $data = $query->row_array();
                $sessionData['id_user'] = $user['id_user'];
                $sessionData['user_email'] = $user['user_email'];
                $sessionData['user_name'] = $user['user_name'];
                $sessionData['id_status'] = $user['id_status'];
                $sessionData['is_login'] = TRUE;

                $this->session->set_userdata($sessionData);
                $this->users_model->updateLastLogin($user['id_user']);

                if ($this->session->userdata('id_status') == 1) {
                    redirect('admin/homes');
                } else {
                    redirect('public/homes');
                }
            } else {
                $this->session->set_flashdata('message', 'Login Failed!, email and password combination was wrong ' . $this->session->userdata('id_status'));
                redirect('public/logins');
            }
        } else {
            $this->session->set_flashdata('message', 'Login Failed!, email and password combination was wrong ');
            $data['title'] = "Login | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }

    public function process_logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function doforget() {
        $this->load->helper('url');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email', TRUE);
            $query = $this->db->query("select * from users_tabel where user_email='" . $email . "'");
            if ($query->num_rows > 0) {
                $r = $query->result();
                $user = $r[0];
                $this->resetpassword($user);
            } else {
                $data['title'] = "Login | Adney's Shop";
                $this->session->set_flashdata('message', '<div class="alert alert-danger">The email id you entered '. $email .' not found on our database to reset your password.</div>');
                redirect('public/logins', $data);
            }
        } else {            
            $this->session->set_flashdata('message', '<div class="alert alert-danger">The email id you entered '. $email .' not found on our database to reset your password.</div>');
            $data['title'] = "Login | Adney's Shop";
            redirect('public/logins', $data);
        }
    }

    private function resetpassword($user) {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper('string');
        $password = random_string('alnum', 16);
        $this->load->library('email');
        $this->email->from('keykaka.kurniawan@gmail.com', 'Administrator');
        $this->email->to($user->user_email);
        $this->email->subject('Password reset');
        $this->email->message('You have requested the new password, Here is your new password:' . $password .' for login into Adneys Shop');
        $sendemail = $this->email->send();
        if ($sendemail) {
            $this->db->where('id_user', $user->id_user);
//        $this->db->update('users_tabel', array('user_password' => MD5($password), 'confirm_password' => MD5($password)));
            $this->db->update('users_tabel', array('user_password' => ($password), 'confirm_password' => ($password)));
            $data['title'] = "Login | Adney's Shop";
            $this->session->set_flashdata('message', '<div class="alert alert-success">Your Password has been reset and has been sent to email id:' . $user->user_email . '</div>');
            redirect('public/logins', $data);
        } else {
            show_error($this->email->print_debugger());
            $data['title'] = "Login | Adney's Shop";
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal Mengirimkan Kode Reset password ke email anda:' . $user->user_email . '</div>');
            redirect('public/logins', $data);
        }
    }
}

?>
