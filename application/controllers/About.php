<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page'=>'about',
            'konten' => $this->load->view('users/v_about',[], TRUE),

        ];
        # code...
        $this->load->view('widget/v_template', $data);
    }

}

/* End of file: About.php */
