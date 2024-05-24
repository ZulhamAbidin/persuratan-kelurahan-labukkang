<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';
// require __DIR__ . '../vendor/autoload.php';
class Welcome extends CI_Controller
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
        $this->load->view('welcome_message');
    }
    function mypdf()
    {
        $live_mpdf = new \Mpdf\Mpdf();
        $all_html = $this->load->view('tsusaha', [], true); //CodeIgniter view file name
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output(); // simple run and opens in browser
        //$live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name
    }
    public function generate_barcode_image($data)
    {
        require FCPATH . '/application/libraries/tcpdf/tcpdf.php';


        $pdf = new TCPDF();
        $pdf->AddPage();

        // Generate a barcode image and output it to the PDF
        $barcode = TCPDFBarcode::getBarcodeHTML($data, 'C128', 2, 30);
        $pdf->writeHTMLCell(0, 0, '', '', $barcode, 0, 1, 0, true, '', true);

        $pdf->Output();
    }
}
