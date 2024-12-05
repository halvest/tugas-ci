<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header', ['title' => 'Dashboard Dosen']);
        $this->load->view('dashboard/main');    // Halaman utama
        $this->load->view('templates/footer');
    }

    public function tambah_mahasiswa()
    {
        $this->load->view('templates/header', ['title' => 'Tambah Mahasiswa']);
        $this->load->view('dashboard/tambah_mahasiswa');
        $this->load->view('templates/footer');
    }

    public function hapus_mahasiswa()
    {
        $this->load->view('templates/header', ['title' => 'Hapus Mahasiswa']);
        $this->load->view('dashboard/hapus_mahasiswa');
        $this->load->view('templates/footer');
    }

    public function tambah_nilai()
    {
        $this->load->view('templates/header', ['title' => 'Tambah Nilai']);
        $this->load->view('dashboard/tambah_nilai');
        $this->load->view('templates/footer');
    }

    public function hapus_nilai()
    {
        $this->load->view('templates/header', ['title' => 'Hapus Nilai']);
        $this->load->view('dashboard/hapus_nilai');
        $this->load->view('templates/footer');
    }

    public function laporan_nilai()
    {
        $data['laporan'] = $this->Mahasiswa_model->get_nilai(); // Ambil data nilai
        $this->load->view('templates/header', ['title' => 'Laporan Nilai']);
        $this->load->view('dashboard/laporan_nilai', $data);
        $this->load->view('templates/footer');
    }
}
