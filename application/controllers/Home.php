<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'home',
            'konten' => $this->load->view('users/v_home', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }


}

/* End of file: Home.php */
