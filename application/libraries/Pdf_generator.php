Copy code
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

class Pdf_generator {
    private $mpdf;

    public function __construct($config = array()) {
        $default_config = array(
            'mode' => 'utf-8',
            'format' => 'A4', // You can set other formats like 'Letter', 'Legal', etc.
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
        );

        $config = array_merge($default_config, $config);

        $this->mpdf = new \Mpdf\Mpdf($config);
    }

    public function generate($html) {
        $this->mpdf->WriteHTML($html);
        $this->mpdf->Output();
    }
}