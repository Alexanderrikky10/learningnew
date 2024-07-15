<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'contact',
            'konten' => $this->load->view('users/v_contact', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }

}
?>
