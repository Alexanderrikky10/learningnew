<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['anggota'] = $this->admin->getUser()->result_array();
        $data = [
            'page' => 'dashboard',
            'konten' => $this->load->view('admin/v_dashboard', $data, TRUE),
        ];
        $this->load->view('widget/admin/v_template_admin', $data);
    }
}

/* End of file: Admin.php */
