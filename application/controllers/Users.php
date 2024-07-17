<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    
    public function index()
    {
        $data = [
            'page' => 'start',
            'konten' => $this->load->view('users/v_start', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

    public function home()
    {
        $data = [
            'page' => 'home',
            'konten' => $this->load->view('users/v_home', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

    
    public function about()
    {
        $data = [
            'page'=>'about',
            'konten' => $this->load->view('users/v_about',[], TRUE),

        ];
        # code...
        $this->load->view('widget/users/v_template', $data);
    }

    public function course()
    {
        $data = [
            'page' => 'course',
            'konten' => $this->load->view('users/v_course', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

    public function course_details()
    {
        $data = [
            'page' => 'course_details',
            'konten' => $this->load->view('users/v_course_details', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

    public function trainers()
    {
        $data = [
            'page' => 'trainers',
            'konten' => $this->load->view('users/v_trainers', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

    public function events()
    {
        $data = [
            'page' => 'events',
            'konten' => $this->load->view('users/v_events', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

    public function pricing()
    {
        $data = [
            'page' => 'pricing',
            'konten' => $this->load->view('users/v_pricing', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

    public function contact()
    {
        $data = [
            'page' => 'contact',
            'konten' => $this->load->view('users/v_contact', [], TRUE),
        ];
        $this->load->view('widget/users/v_template', $data);
    }

}

/* End of file: User.php */
