<?php

date_default_timezone_set("Asia/Jakarta");
$date=date('d-m-Y');
foreach ($query as $dinamis) {
// create new PDF document
$pdf = new PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Haris Yutri');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}



// ---------------------------------------------------------
// set font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();

// set some text to print

    $html = <<<EOD
<div
 style="text-align: center; font-family: Helvetica,Arial,sans-serif;">&nbsp;<span
 style="text-decoration: underline;">SURAT KETERANGAN
</span><br>
No. ..............................<br>
</div>
<br style="font-family: Helvetica,Arial,sans-serif;">
<br style="font-family: Helvetica,Arial,sans-serif;">
<p style="font-family: Helvetica,Arial,sans-serif;"
 class="MsoNoSpacing"><span style="font-size: 12pt;"
 lang="IN">Yang bertanda
tangan di bawah ini Ketua RT. {$dinamis->rt} RW. {$dinamis->rw} Desa {$dinamis->desa}
Kecamatan
{$dinamis->kecamatan} Kabupaten {$dinamis->kabupaten} dengan ini menerangkan bahwa :</span></p>
<table style="text-align: left; width: 592px; height: 242px;"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="width: 198px;">Nama</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->nama}</td>
    </tr>
    <tr>
      <td style="width: 198px;">Tempat dan Tanggal Lahir</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->tempat_lahir}, {$dinamis->tgl_lahir}</td>
    </tr>
    <tr>
      <td style="width: 198px;">Jenis Kelamin</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->jenis_kelamin}</td>
    </tr>
    <tr>
      <td style="width: 198px;">Pekerjaan</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->pekerjaan}</td>
    </tr>
    <tr>
      <td style="width: 198px;">Agama</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->agama}</td>
    </tr>
    <tr>
      <td style="width: 198px;">Status Perkawinan</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->status}</td>
    </tr>
    <tr>
      <td style="width: 198px;">Kewarganegaraan</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->kewarganegaraan}</td>
    </tr>
    <tr>
      <td style="width: 198px;">Alamat</td>
      <td style="width: 10px;">:</td>
      <td style="width: 387px;">{$dinamis->alamat}</td>
    </tr>
  </tbody>
</table>
<p style="font-family: Helvetica,Arial,sans-serif;"
 class="MsoNoSpacing"><span style="font-size: 12pt;"
 lang="IN">Orang tersebut
diatas, adalah <b style="">benar-benar warga kami dan
berdomisili di&nbsp;</b>RT.
{$dinamis->rt} RW. {$dinamis->rw} Desa {$dinamis->desa}
Kecamatan {$dinamis->kecamatan} Kabupaten {$dinamis->kabupaten} Surat keterangan ini
dibuat
sebagai kelengkapan pengurusan
{$keperluan}</span></p>
<p style="font-family: Helvetica,Arial,sans-serif;"
 class="MsoNoSpacing"><span style="font-size: 12pt;"
 lang="IN">Demikian surat
keterangan ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</span></p>

        <div style="text-align: right;">
<span>{$dinamis->kabupaten},
{$date}</span><br>
&nbsp; &nbsp;Ketua RT
{$dinamis->rt} RW {$dinamis->rw} &nbsp;&nbsp;
<br>
<br>
<br>
<br>
<br>
<p style="font-weight: bold; text-decoration: underline;">Dhani
Sulistiyo WIbowo</p>
</div>

EOD;
}
// print a block of text using Write()
$pdf->writeHTML($html, true, false, false, 0);

// ---------------------------------------------------------
//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
