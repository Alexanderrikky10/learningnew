<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainers extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'trainers',
            'konten' => $this->load->view('users/v_trainers', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }

}

/* End of file: Trainers.php */
