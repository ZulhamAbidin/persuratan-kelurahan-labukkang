<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . '/libraries/tcpdf/tcpdf.php';

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->load->model('M_Pengaduan', 'pengaduan');
    }

    public function index()
    {
        $judul = [
            'title' => 'Management Pengaduan',
            'sub_title' => ''
        ];
        $data['data'] = $this->db->get('pengaduan')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('newpengaduan/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('pengaduan', ['id' => $id])->row_array();

        $this->db->where(['id' => $id]);
        $this->db->delete('pengaduan');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('pengaduan'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Penduduk',
                'sub_title' => 'Tambah Penduduk '
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('penduduk/tambah');
            $this->load->view('templates/footer');
        } else {
            $nik =  $this->input->post("nik", TRUE);
            $nama =  $this->input->post("nama", TRUE);
            $tmpt_lhr =  $this->input->post("tmpt_lhr", TRUE);
            $tgl_lhr =  $this->input->post("tgl_lhr", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $no_hp =  $this->input->post("no_hp", TRUE);
            $pekerjaan =  $this->input->post("pekerjaan", TRUE);
            $rw =  $this->input->post("rw", TRUE);
            $rt =  $this->input->post("rt", TRUE);

            $save = [
                'nik' => $nik,
                'nama' => $nama,
                'tmpt_lhr' => $tmpt_lhr,
                'tgl_lhr' => date('Y-m-d', strtotime($tgl_lhr)),
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'pekerjaan' => $pekerjaan,
                'rw' => $rw,
                'rt' => $rt

            ];

            $this->db->insert('penduduk', $save);
            $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
            redirect(base_url("penduduk"));
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Penduduk',
                'sub_title' => 'Edit Penduduk'
            ];

            $data['penduduk'] = $this->db->get_where('penduduk', ['nik' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('penduduk/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $nik =  $this->input->post("nik", TRUE);
            $nama =  $this->input->post("nama", TRUE);
            $tmpt_lhr =  $this->input->post("tmpt_lhr", TRUE);
            $tgl_lhr =  $this->input->post("tgl_lhr", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $no_hp =  $this->input->post("no_hp", TRUE);
            $pekerjaan =  $this->input->post("pekerjaan", TRUE);
            $rw =  $this->input->post("rw", TRUE);
            $rt =  $this->input->post("rt", TRUE);

            $update = [
                'nik' => $nik,
                'nama' => $nama,
                'tmpt_lhr' => $tmpt_lhr,
                'tgl_lhr' => date('Y-m-d', strtotime($tgl_lhr)),
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'pekerjaan' => $pekerjaan,
                'rw' => $rw,
                'rt' => $rt
            ];

            $this->db->where('nik', $id);
            $this->db->update('penduduk', $update);

            $this->session->set_flashdata('success', 'Berhasil Diupdate!');
            redirect(base_url("penduduk"));
        }
    }

    function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->M_Penduduk->search_nik($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'  => $row->nik,
                        'nama' => $row->nama,
                        'no_hp' => $row->no_hp,
                    );
                echo json_encode($arr_result);
            }
        }
    }

    public function cetak()
    {
        $query = $this->db->select('nik, nama, no_hp')->get('penduduk');
        $data = $query->result_array();

        // Generate PDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle("Data Penduduk");
        $pdf->SetHeaderData('', 0, "Database Penduduk", '');
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetFont('helvetica', '', 12);

        $pdf->AddPage();

        // Add table
        $html = '<table border="1" style="border-collapse: collapse; width: 100%;">';
        $html .= '<tr>
        <td style="padding: 1px;">NIK</td>
        <td  style="padding: 1px;">Nama</td>
        <td style="padding: 1px;">No HP</td>
        </tr>';
        foreach ($data as $row) {
            $html .= '<tr>';
            foreach ($row as $cell) {
                $html .= '<td style="padding: 1px;">' . $cell . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';

        $pdf->writeHTML($html, true, false, false, false, '');

        // Output PDF
        $pdf->Output('table.pdf', 'I');
    }

    public function ajukan()
    {

        $nama = $this->input->post('nama', TRUE);
        $nik = $this->input->post('nik', TRUE);
        $no_hp = $this->input->post('no_hp', TRUE);
        $jenis_pengaduan = $this->input->post('jenis_pengaduan', TRUE);

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

        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'no_hp' => $no_hp,
            'jenis_pengaduan' => $jenis_pengaduan,
            'file' => $file,
        ];

        // var_dump($data);
        // die;

        $this->pengaduan->insert_p_pengaduan($data);
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengajukan Pengaduan! </b></div>');
        redirect(base_url("/suratonline/halaman_pengaduan"));
    }
}
