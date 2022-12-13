<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->m_login->proses_login($username, $password);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('panel');
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
