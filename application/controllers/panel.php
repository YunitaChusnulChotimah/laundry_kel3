<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class Panel extends CI_Controller {

    public function index()
    {
        $this->load->view('backend/login');
    }
}