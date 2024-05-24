<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $judul = [
            'title' => 'Management Berita',
            'sub_title' => ''
        ];
        $data['data'] = $this->db->get('berita')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {

        $this->form_validation->set_rules('judul_b', 'Judul Berita', 'required');
        $this->form_validation->set_rules('deskripsi_b', 'Deskripsi Berita', 'required');
        // $this->form_validation->set_rules('level', 'Hak Akses', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Berita',
                'sub_title' => ''
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('berita/tambah');
            $this->load->view('templates/footer');
        } else {
            $judul_b =  $this->input->post("judul_b", TRUE);
            $deskripsi_b =  $this->input->post("deskripsi_b", TRUE);

            $config['upload_path']          = './assets/galery/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            // $this->load->library('upload', $config);
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto_b');

            // if ($this->upload->do_upload('foto_b')) {

            $data = array('upload_data' => $this->upload->data());
            $file_foto = $data['upload_data']['file_name'];


            $save = [
                'judul_b' => $judul_b,
                'deskripsi_b' => $deskripsi_b,
                'gambar_b' => $file_foto,
            ];

            $this->db->insert('berita', $save);

            $this->session->set_flashdata('success', 'User Berhasil Ditambah!');
            redirect(base_url('berita'));
            // }
        }
    }
    public function hapus($id)
    {
        $this->db->where(['id' => $id]);
        $this->db->delete('berita');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('berita'));
    }
    public function editform($id)
    {
        $this->form_validation->set_rules('judul_b', 'Judul Berita', 'required');
        $this->form_validation->set_rules('deskripsi_b', 'Deskripsi Berita', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();
            $judul = [
                'title' => 'Edit Berita',
                'sub_title' => ''
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('berita/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $judul_b =  $this->input->post("judul_b", TRUE);
            $deskripsi_b =  $this->input->post("deskripsi_b", TRUE);

            $config['upload_path']          = './assets/galery/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            // $this->load->library('upload', $config);
            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto_b')) {

                $data = array('upload_data' => $this->upload->data());
                $file_foto = $data['upload_data']['file_name'];


                $update = [
                    'judul_b' => $judul_b,
                    'deskripsi_b' => $deskripsi_b,
                    'gambar_b' => $file_foto,
                ];

                $this->db->where('id', $id);
                $this->db->update('berita', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("berita"));
            } else {
                $update = [
                    'judul_b' => $judul_b,
                    'deskripsi_b' => $deskripsi_b,
                ];

                $this->db->where('id', $id);
                $this->db->update('berita', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("berita"));
            }



            // if ($this->upload->do_upload('foto_b')) {


            // }
        }
    }
}
