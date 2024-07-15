<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'course',
            'konten' => $this->load->view('users/v_course', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }


}

/* End of file: Course.php */
