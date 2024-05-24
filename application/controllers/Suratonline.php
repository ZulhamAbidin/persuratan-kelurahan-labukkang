<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratonline extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');
        $this->load->model('M_Penduduk', 'penduduk');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
        $this->load->model('auth_model', 'auth');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Pengajuan Surat Online',
            'sub_title' => ''
        ];

        $data['options'] = [
            'Pilih',
            'Surat Pengantar:' => [
                'SPKK' => 'Kartu Keluarga',
                'SPNA' => 'Nikah(N.A)',

            'SKKM' => 'Kematian',
            'SKK' => 'Kuasa',
            'SKJB' => 'Jual Beli',
            'SKM' => 'Miskin',
            'SKH' => 'Hibah',
            'SITU' => 'Izin Tempat Usaha',
            ],
            'Surat Keterangan:' => [

                'SKKM' => 'Kematian',
                'SKK' => 'Kuasa',
                'SKJB' => 'Jual Beli',
                'SKM' => 'Miskin',
                'SKH' => 'Hibah',
            ],
            'Rekomendasi Surat:' => [
                'SITU' => 'Izin Tempat Usaha',
            ],
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/s_online', $data);
        $this->load->view('frontend/footer2', $data);
    }

    public function pengajuansurat()
    {
        $data['options'] = [
            'Pilih',
            'Surat Pengantar:' => [
                'SPKK' => 'Kartu Keluarga',
                'SPNA' => 'Nikah(N.A)',
            ],
            'Surat Keterangan:' => [

                'SKKM' => 'Kematian',
                'SKK' => 'Kuasa',
                'SKJB' => 'Datang',
                'SKM' => 'Miskin',
                'SKH' => 'Hibah',
            ],
            'Rekomendasi Surat:' => [
                'SITU' => 'Izin Tempat Usaha',
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
        $this->load->view('frontend/new_pengajuan', $data);
        // $this->load->view('frontend/footer', $data);
    }
    public function ajukan()
    {
        $status = [
            1 => 1,  // Pending
            2 => 2,  // Diterima dan Dilanjutkan
            3 => 3,  // Sudah Diketik dan Diparaf
            4 => 4,  // Sudah Ditandatangani Lurah dan Selesai
        ];

        $nama = $this->input->post('nama', TRUE);
        $nik = $this->input->post('nik', TRUE);
        $no_hp = $this->input->post('no_hp', TRUE);
        $jenis_surat = $this->input->post('jenis_surat', TRUE);
        $tmpt_lahir = $this->input->post('tmpt_lahir', TRUE);
        $tgl_lahir = $this->input->post('tgl_lahir', TRUE);
        $agama = $this->input->post('agama', TRUE);
        $jekel = $this->input->post('jekel', TRUE);
        $kewarganegaraan = $this->input->post('kewarganegaraan', TRUE);
        $status_kawin = $this->input->post('status_kawin', TRUE);

        $ceknik = $this->penduduk->cek_penduduk($nik)->num_rows();

        if ($ceknik <= 0) {
            $save = [
                'nik' => $nik,
                'nama' => $nama,
                'no_hp' => $no_hp,
                'tmpt_lhr' => $tmpt_lahir,
                'tgl_lhr' => $tgl_lahir,
                'agama' => $agama,
                'jekel' => $jekel,
                'kewarganegaraan' => $kewarganegaraan,
                'status_kawin' => $status_kawin,

            ];

            $this->db->insert('penduduk', $save);
            // $this->session->set_flashdata('success', '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-cross"></i> Maaf!</h5> NIK Anda tidak Terdaftar!</div>');
            // redirect(base_url("suratonline"));
        }

        //Output a v4 UUID 
        $rid = uniqid($jenis_surat, TRUE);
        $rid2 = str_replace('.', '', $rid);
        $rid3 = substr(str_shuffle($rid2), 0, 3);

        $cc = $this->db->count_all('pengajuan_surat') + 1;
        $count = str_pad($cc, 3, STR_PAD_LEFT);
        $id = $jenis_surat . "-";
        $d = date('d');
        $y = date('y');
        $mnth = date("m");
        $s = date('s');
        $randomize = $d + $y + $mnth + $s;
        $id = $id . $rid3 . $randomize . $count . $y;

        // var_dump($id);
        // die;

        if ($_FILES['file']['size'] >= 5242880) {
            $this->session->set_flashdata('success', '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-ban"></i> MAAF!</h5> File Lebih 2MB!</div>');
            redirect(base_url("suratonline"));
        }

        if ($_FILES['file']['name'] == null) {
            $file = '-';
        } else {
            $namafile = substr($_FILES['file']['name'], -7);
            $file = $jenis_surat . uniqid() . $namafile;
            $config['upload_path']          = './uploads/berkas';
            $config['allowed_types']        = '*';
            $config['max_size']             = 5120; // 5MB
            $config['file_name']            = $file;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("file")) {
                $data = array('upload_data' => $this->upload->data());
                $berkas = $data['upload_data']['file_name'];
            }
        }

        if ($jenis_surat == 'SITU') {
            $nama_usaha = $this->input->post('nama_usaha', TRUE);
            $alamat_usaha = $this->input->post('alamat_usaha', TRUE);
            $data = [
                'id' => $id,
                // 'nama' => $nama,
                'nik' => $nik,
                // 'no_hp' => $no_hp,
                'jenis_surat' => $jenis_surat,
                'file' => $file,
                'tanggal' => date('Y-m-d'),
                'status' => $status[1],
                'nama_usaha' => $nama_usaha,
                'alamat_usaha' => $alamat_usaha,
            ];
        }elseif($jenis_surat == 'SPNA'){
            $status_kawin = $this->input->post('status_kawin', TRUE);
            $jekel = $this->input->post('jekel', TRUE);
               $data = [
                    'id' => $id,
                // 'nama' => $nama,
                'nik' => $nik,
                // 'no_hp' => $no_hp,
                'jenis_surat' => $jenis_surat,
                'file' => $file,
                'tanggal' => date('Y-m-d'),
                'status' => $status[1],
                'status_kawin' => $status_kawin,
                'jekel' => $jekel,
                ];
            }elseif($jenis_surat == 'SPSKCK'){
                $status_kawin = $this->input->post('status_kawin', TRUE);
                $jekel = $this->input->post('jekel', TRUE);
                   $data = [
                        'id' => $id,
                    // 'nama' => $nama,
                    'nik' => $nik,
                    // 'no_hp' => $no_hp,
                    'jenis_surat' => $jenis_surat,
                    'file' => $file,
                    'tanggal' => date('Y-m-d'),
                    'status' => $status[1],
                    'status_kawin' => $status_kawin,
                    'jekel' => $jekel,
                    ];
        }elseif($jenis_surat == 'SKKM'){
            $status_kawin = $this->input->post('status_kawin', TRUE);
            $jekel = $this->input->post('jekel', TRUE);
               $data = [
                    'id' => $id,
                // 'nama' => $nama,
                'nik' => $nik,
                // 'no_hp' => $no_hp,
                'jenis_surat' => $jenis_surat,
                'file' => $file,
                'tanggal' => date('Y-m-d'),
                'status' => $status[1],
                // 'status_kawin' => $status_kawin,
                // 'jekel' => $jekel,
                ];
            }elseif($jenis_surat == 'SKJB'){
                $status_kawin = $this->input->post('status_kawin', TRUE);
                $jekel = $this->input->post('jekel', TRUE);
                   $data = [
                        'id' => $id,
                    // 'nama' => $nama,
                    'nik' => $nik,
                    // 'no_hp' => $no_hp,
                    'jenis_surat' => $jenis_surat,
                    'file' => $file,
                    'tanggal' => date('Y-m-d'),
                    'status' => $status[1],
                    // 'status_kawin' => $status_kawin,
                    // 'jekel' => $jekel,
                    ];
                }elseif($jenis_surat == 'SKK'){
                    $status_kawin = $this->input->post('status_kawin', TRUE);
                    $jekel = $this->input->post('jekel', TRUE);
                       $data = [
                            'id' => $id,
                        // 'nama' => $nama,
                        'nik' => $nik,
                        // 'no_hp' => $no_hp,
                        'jenis_surat' => $jenis_surat,
                        'file' => $file,
                        'tanggal' => date('Y-m-d'),
                        'status' => $status[1],
                        // 'status_kawin' => $status_kawin,
                        // 'jekel' => $jekel,
                        ];
                    }elseif($jenis_surat == 'SKM'){
                        $status_kawin = $this->input->post('status_kawin', TRUE);
                        $jekel = $this->input->post('jekel', TRUE);
                           $data = [
                                'id' => $id,
                            // 'nama' => $nama,
                            'nik' => $nik,
                            // 'no_hp' => $no_hp,
                            'jenis_surat' => $jenis_surat,
                            'file' => $file,
                            'tanggal' => date('Y-m-d'),
                            'status' => $status[1],
                            // 'status_kawin' => $status_kawin,
                            // 'jekel' => $jekel,
                            ];
                            }elseif($jenis_surat == 'SKH'){
                                $status_kawin = $this->input->post('status_kawin', TRUE);
                                $jekel = $this->input->post('jekel', TRUE);
                                   $data = [
                                        'id' => $id,
                                    // 'nama' => $nama,
                                    'nik' => $nik,
                                    // 'no_hp' => $no_hp,
                                    'jenis_surat' => $jenis_surat,
                                    'file' => $file,
                                    'tanggal' => date('Y-m-d'),
                                    'status' => $status[1],
                                    // 'status_kawin' => $status_kawin,
                                    // 'jekel' => $jekel,
                                    ];
        }
        else {
            $data = [
                'id' => $id,
                // 'nama' => $nama,
                'nik' => $nik,
                // 'no_hp' => $no_hp,
                'jenis_surat' => $jenis_surat,
                'file' => $file,
                'tanggal' => date('Y-m-d'),
                'status' => $status[1],
                // 'nama_usaha' => $nama_usaha,
                // 'alamat_usaha' => $alamat_usaha,
            ];
        }


        // var_dump($data);
        // die;

        $this->pengajuan_track->insert_p_surat($data);
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengajukan Surat! Berikut <b>ID</b> anda: <b>' . $id . '</b></div>');
        // redirect(base_url("/suratonline/pengajuansurat"));
        redirect(base_url("/suratonline/halaman_pengajuan"));
    }

    public function halaman_login()
    {
        $this->load->view('loginuser');
    }
      public function halaman_registrasi()
    {
        $this->load->view('registrasiuser');
    }
    
     public function halaman_pengaduan()
    {
        $data['optionsdua'] = [
            'Pilih',
            'Sarana Prasarana',
            'Layanan',
        ];
        $this->load->view('frontend/newtwo_pengaduan',$data);
    }
    
      public function halaman_dashboard()
    {
        $this->load->view('frontend/newtwo_dashboard');
    }
    
    public function process_login()
    {
           $nik = $this->input->post('nik');
           $password = $this->input->post('password');
           
        $this->db->where('nik', $nik);
        $this->db->where('password', $password); 
        $query = $this->db->get('penduduk'); 

        if ($query->num_rows() === 1) {
            // Store user data in session

            // Redirect to the dashboard or another page
            redirect('/suratonline/halaman_dashboard');
        } else {
            // Invalid login, display error message
             $pesan = 'Login Gagal, Periksa Username dan Password';
            redirect('/Suratonline/halaman_login/?pesan=' . urlencode($pesan));
        }
    }
    
      public function process_registrasi()
    {
        // Handle the login process here
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $no_hp = $this->input->post('no_hp');
        $tmpt_lhr = $this->input->post('tmpt_lhr');
        $tgl_lhr = $this->input->post('tgl_lhr');
        $pekerjaan = $this->input->post('pekerjaan');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $jekel = $this->input->post('jekel');
        $kewarganegaraan = $this->input->post('kewarganegaraan'); 
        $status_kawin = $this->input->post('status_kawin');  
        $password = $this->input->post('password');

         $this->db->where('nik', $nik);
        // $this->db->where('password', $password); 
        $query = $this->db->get('penduduk'); 

        if ($query->num_rows() === 1) {
            // Store user data in session

            // Redirect to the dashboard or another page
       
            $error_message = 'Gagal Registrasi, User ditemukan';
            redirect('/Suratonline/halaman_registrasi/?error=' . urlencode($error_message));
        } else {
            // Invalid login, display error message
     

            $save = [
                'nik' => $nik,
                'nama' => $nama,
                'no_hp' => $no_hp,
                'tmpt_lhr' => $tmpt_lhr,
                'tgl_lhr' => $tgl_lhr,
                'agama' => $agama,
                'alamat' => $alamat,
                'pekerjaan' =>$pekerjaan,
                'jekel' =>$jekel,
                'status_kawin' =>$status_kawin,
                'kewarganegaraan' =>$kewarganegaraan,
                'password' =>$password,
            ];

            $this->db->insert('penduduk', $save);
            // $this->session->set_flashdata('success', '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-cross"></i> Maaf!</h5> NIK Anda tidak Terdaftar!</div>');
            $pesan = 'Registrasi Berhasil, Silahkan Login';
            redirect('/suratonline/halaman_login/?pesan=' . urlencode($pesan));
        

        }
    }
    
    public function halaman_pengajuan()
    {

        $data['options'] = [
            'Pilih',
            'Surat Pengantar:' => [
                'SPSKCK' => 'Surat Pengantar SKCK',
                'SPNA' => 'Nikah(N.A)',
            ],
            'Surat Keterangan:' => [
                'SKKM' => 'Kematian',
                'SKK' => 'Kuasa',
                'SKJB' => 'Jual Beli',
                // 'SKBM' => 'Belum Menikah',
                'SKM' => 'Miskin',
                'SKH' => 'Hibah',
            ],
            'Rekomendasi Surat:' => [
                'SITU' => 'Izin Tempat Usaha',
                // 'SIMB' => 'Izin Mendirikan Bangunan',
            ],
        ];
        $this->load->view('frontend/newtwo_pengajuan', $data);
    }
}
