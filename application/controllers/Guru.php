<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'page' => 'dashboard',
            'konten' => $this->load->view('guru/v_dashboard', [], TRUE),
        ];
        $this->load->view('widget/guru/v_template_guru', $data);
    }

   
    public function absen()
    {
        $data = [
            'page' => 'absen',
            'konten' => $this->load->view('guru/v_absen', [], TRUE),
        ];
        $this->load->view('widget/guru/v_template_guru', $data);
    }
}

/* End of file: Guru.php */
