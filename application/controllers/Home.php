<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // // $data = $this->dashboard->user();
        // $data['profil'] = $this->galery->profil();
        // $judul = [
        //     'title' => 'Beranda - Sistem Informasi Pelayanan Surat Kantor Kelurahan Labukkang',
        //     'sub_title' => ''
        // ];

        // // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // // var_dump($data);
        // $this->load->view('frontend/header', $judul);
        // $this->load->view('frontend/home', $data);
        // $this->load->view('frontend/footer', $data);
        $data['options'] = [
            'Pilih',
            'Surat Pengantar:' => [
                'SPKK' => 'Kartu Keluarga',
                'SPNA' => 'Nikah(N.A)',
            ],
            'Surat Keterangan:' => [
                'SKKL' => 'Kelahiran',
                'SKKM' => 'Kematian',
                'SKP' => 'Pindah',
                'SKD' => 'Datang',
                'SKBM' => 'Belum Menikah',
                'SKPH' => 'Penghasilan',
                'SKM' => 'Miskin',
                'SKU' => 'Usaha',
                'SKT' => 'Tanah',
                'SKGG' => 'Ganti Rugi',
            ],
            'Rekomendasi Surat:' => [
                'SITU' => 'Izin Tempat Usaha',
                'SIMB' => 'Izin Mendirikan Bangunan',
            ],
        ];
        $data['optionsdua'] = [
            'Pilih',
            'Sarana Prasarana',
            'Layanan',
        ];
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $data['berita'] = $this->db->get('berita')->result_array();
        $judul = [
            'title' => 'Beranda - Sistem Informasi Pelayanan Surat Kantor Kelurahan Labukkang',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        // $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/new_home', $data);
        // $this->load->view('frontend/footer', $data);
    }

    public function newk()
    {
        $data['options'] = [
            'Pilih',
            'Surat Pengantar:' => [
                'SPKK' => 'Kartu Keluarga',
                'SPNA' => 'Nikah(N.A)',
            ],
            'Surat Keterangan:' => [
                'SKKL' => 'Kelahiran',
                'SKKM' => 'Kematian',
                'SKP' => 'Pindah',
                'SKD' => 'Datang',
                'SKBM' => 'Belum Menikah',
                'SKPH' => 'Penghasilan',
                'SKM' => 'Miskin',
                'SKU' => 'Usaha',
                'SKT' => 'Tanah',
                'SKGG' => 'Ganti Rugi',
            ],
            'Rekomendasi Surat:' => [
                'SITU' => 'Izin Tempat Usaha',
                'SIMB' => 'Izin Mendirikan Bangunan',
            ],
        ];
        $data['optionsdua'] = [
            'Pilih',
            'Sarana Prasarana',
            'Layanan',
        ];
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $data['berita'] = $this->db->get('berita')->result_array();
        $judul = [
            'title' => 'Beranda - Sistem Informasi Pelayanan Surat Kantor Kelurahan Labukkang',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        // $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/new_home', $data);
        // $this->load->view('frontend/footer', $data);
    }
}
