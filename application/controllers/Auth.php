<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login()
    {
        $data = [
            'page' => 'login',
            'konten' => $this->load->view('login/v_login', [], TRUE),
        ];
        $this->load->view('login/v_template', $data);
    }
    public function register()
{
    $data = [
        'page' => 'register',
        'konten' => $this->load->view('login/v_register', [], TRUE),
    ];
    $this->load->view('login/v_template', $data);
}

}

/* End of file: Auth.php */
