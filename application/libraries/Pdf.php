<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        //$image_file = K_PATH_IMAGES.'logo_example.jpg';
        //$this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('times', 'B', 13);
        // Title
//		$this->Cell(0, 15, 'PEMERINTAH DESA ........................', 0, false, 'C', 0, '', 0, false, 'M', 'M');
//                $this->Cell(1, 15, 'KETUA RT. .......... RW. ..........', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $asa="dfsd";
        $html = '<div style="text-align: center; font-weight: bold;">
<span style="font-size: 14pt;">Pemeritahan
Desa Sumber Jaya</span>
<br>
<span style="font-size: 16pt;">Ketua
RT  RW 04</span><br>
<span style="font-size: 13pt;">Desa
Sumber Jaya Kecamatan Tambun Selatan Kabupaten Bekasi</span>
<hr noshade="noshade" size="10">
</div>

';
        $this->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'top', $autopadding = true);
    }

}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
