<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function mypdf($id)
    {
        $datanik = $this->db->get_where('pengajuan_surat', array('id' => $id))->result();

        $data['pengajuan'] = $this->db->get_where('pengajuan_surat', array('id' => $id))->result();
        $data['penduduk'] = $this->db->get_where('penduduk', array('nik' => $datanik[0]->NIK))->result();
        $live_mpdf = new \Mpdf\Mpdf();
        if ($datanik[0]->jenis_surat == 'SITU') {
            $all_html = $this->load->view('tsusaha', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
        if ($datanik[0]->jenis_surat == 'SPNA') {
            $all_html = $this->load->view('tsnikah', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
        if ($datanik[0]->jenis_surat == 'SPSKCK') {
            $all_html = $this->load->view('tsskck', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
         if ($datanik[0]->jenis_surat == 'SKKM') {
            $all_html = $this->load->view('tskematian', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
         if ($datanik[0]->jenis_surat == 'SKJB') {
            $all_html = $this->load->view('tsjualbeli', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
        if ($datanik[0]->jenis_surat == 'SKK') {
            $all_html = $this->load->view('tskuasa', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
        if ($datanik[0]->jenis_surat == 'SKM') {
            $all_html = $this->load->view('tsmiskin', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
          if ($datanik[0]->jenis_surat == 'SKH') {
            $all_html = $this->load->view('tshibah', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
    }

    function mypdfdua($id)
    {
        $datanik = $this->db->get_where('pengajuan_surat', array('id' => $id))->result();

        $data['pengajuan'] = $this->db->get_where('pengajuan_surat', array('id' => $id))->result();
        $data['penduduk'] = $this->db->get_where('penduduk', array('nik' => $datanik[0]->NIK))->result();
        $live_mpdf = new \Mpdf\Mpdf();

        if ($datanik[0]->jenis_surat == 'SITU') {
            $all_html = $this->load->view('ttusaha', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
        if ($datanik[0]->jenis_surat == 'SPNA') {
            $all_html = $this->load->view('ttnikah', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        } if ($datanik[0]->jenis_surat == 'SPSKCK') {
            $all_html = $this->load->view('ttskck', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
        
         if ($datanik[0]->jenis_surat == 'SKKM') {
            $all_html = $this->load->view('ttkematian', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
          if ($datanik[0]->jenis_surat == 'SKJB') {
            $all_html = $this->load->view('ttjualbeli', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
         if ($datanik[0]->jenis_surat == 'SKK') {
            $all_html = $this->load->view('ttkuasa', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }

        if ($datanik[0]->jenis_surat == 'SKM') {
            $all_html = $this->load->view('tttidakmampu', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }
         if ($datanik[0]->jenis_surat == 'SKH') {
            $all_html = $this->load->view('tthibah', $data, true); 
            $live_mpdf->WriteHTML($all_html);
            $live_mpdf->Output();
        }

    }

    public function generate_barcode_image($data)
    {
        $barcodeValue = "123456789"; // Replace with your barcode value
        $barcodePath = './uploads/berkas/';

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<img src="' . $barcodePath . 'barcode.png" alt="Barcode">');
        $mpdf->Output();
    }
}
