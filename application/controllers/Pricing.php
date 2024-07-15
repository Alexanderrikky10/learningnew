<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'pricing',
            'konten' => $this->load->view('users/v_pricing', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }
}

/* End of file: Pricing.php */
