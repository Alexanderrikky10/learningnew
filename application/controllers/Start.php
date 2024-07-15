<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'start',
            'konten' => $this->load->view('users/v_start', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }

}

/* End of file: Start.php */
