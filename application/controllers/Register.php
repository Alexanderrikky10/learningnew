<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'register',
            'konten' => $this->load->view('login/v_register', [], TRUE),
        ];
        $this->load->view('login/v_template', $data);
    }
}

/* End of file: Register.php */
