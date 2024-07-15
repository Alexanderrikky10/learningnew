<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'events',
            'konten' => $this->load->view('users/v_events', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }

}

/* End of file: Events.php */
