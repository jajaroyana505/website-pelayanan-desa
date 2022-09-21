<?php
class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_layanan');
    }
    public function index()
    {
        $data['judul'] = "Halaman Admin";
        // echo " ini adalah halaman admin";
        $data['layanan'] = $this->Model_layanan->getAllLayanan();
        $this->load->view("admin/header_admin", $data);
        $this->load->view("admin/index");
        $this->load->view("admin/footer_admin");
    }

    public function tambahLayanan()
    {
        $data = [
            'nama_layanan' => $this->input->POST('nama_layanan'),
            'kode' => $this->input->POST('kode')
        ];
        var_dump($data);

        $data['judul'] = "Tambah Layanan";
        // echo " ini adalah halaman admin";
        $this->load->view("admin/header_admin", $data);
        $this->load->view("admin/tambah_layanan");
        $this->load->view("admin/footer_admin");
    }
}
