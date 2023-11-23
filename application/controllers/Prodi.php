<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['prodi'] = $this->Prodi_model->get();
        $data['user'] = $this->User_model->getBy();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah prodi";
        $data['user'] = $this->User_model->getBy();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_tambah_prodi", $data);
        $this->load->view("layout/footer", $data);
        if{

        }else{
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
            ];
        }
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config_image['allowed_types'] = 'gif[jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/prodi/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->Prodi_model->insert($data, $upload_image);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
        redirect('Prodi');

    }
    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        $error=$this->db->error();
        if($error['code']!=0){
            $this->session->set_flashdata('message','<div class="alert alert-dangr" role="alert"><i class="icon fas fa-info-circle"></i>Data Prodi tidak dapat dihapus(sudah berelasi)!</div>');
        }
        redirect('Prodi');
    }
    function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'ruangan' => $this->input->post('ruangan'),
            'jurusan' => $this->input->post('jurusan'),
            'akreditasi' => $this->input->post('akreditasi'),
            'nama_kaprodi' => $this->input->post('nama_kaprodi'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'output_lulusan' => $this->input->post('output_lulusan'),
        ];
        $this->Prodi_model->insert($data);
        redirect('Prodi');
    }
    public function edit($id)
    { if{
        $data['judul'] = "Halaman Edit Prodi";
        $data['prodi'] = $this->Prodi_model->getById($id);
        $data['user'] = $this->User_model->getBy();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_ubah_prodi.php", $data);
        $this->load->view("layout/footer", $data);
    } else{
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config_image['allowed_types'] = 'gif[jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/prodi/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['prodi']['gambar'];
                    if($old_image != 'default.jpg'){
                        unlink(FCPATH . 'assets/img/prodi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Prodi_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen berhasil diubah!</div>');
            redirect('Prodi');
    }
        
    }
    function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'ruangan' => $this->input->post('ruangan'),
            'jurusan' => $this->input->post('jurusan'),
            'akreditasi' => $this->input->post('akreditasi'),
            'nama_kaprodi' => $this->input->post('nama_kaprodi'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'output_lulusan' => $this->input->post('output_lulusan'),
        ];
        $id = $this->input->post('id');
        $this->Prodi_model->update(['id' => $id], $data);
        redirect('Prodi');
    }
}
