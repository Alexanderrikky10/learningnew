<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CourseDetails extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'course_details',
            'konten' => $this->load->view('users/v_course_details', [], TRUE),
        ];
        $this->load->view('widget/v_template', $data);
    }
}

/* End of file: CourseDetails.php */
