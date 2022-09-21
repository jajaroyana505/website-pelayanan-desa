<?php
class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_layanan');
    }
    public function index()
    {
        $data = [
            'judul' => 'Layanan'
        ];
        $data['layanan'] = $this->Model_layanan->getAllLayanan();
        $this->load->view('templat/header', $data);
        $this->load->view('layanan/index');
        $this->load->view('templat/footer');
    }
}
