<?php
include '../config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$kodeaduan = $_GET['kode'];
$sql_query = "select * from pengaduan where nopengaduan='$kodeaduan'";
$result = mysqli_query($con,$sql_query);
$html='<html><table width="100%">';
$htmltableend='</table></html>';
$htmlrow='';
foreach ($result as $row){
  $data='<tr>
        <td width="25%">No. Aduan </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['nopengaduan'].'</td>
       </tr>
       <tr>
        <td width="25%">Nama pelapor </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['namapelapor'].'</td>
       </tr>
       <tr>
        <td width="25%">Alamat </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['alamatpelapor'].'</td>
       </tr>
       <tr>
        <td width="25%">Email </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['emailpelapor'].'</td>
       </tr>
       <tr>
        <td width="25%">Telpon </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['telponpelapor'].'</td>
       </tr>
       <tr>
        <td width="25%">Nama Terlapor </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['namaterlapor'].'</td>
       </tr>
       <tr>
        <td width="25%">Jabatan </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['jabatanterlapor'].'</td>
       </tr>
       <tr>
        <td width="25%">Satuan </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['satuanterlapor'].'</td>
       </tr>
       <tr>
        <td width="25%">Subjek Aduan </td>
        <td width="5%">: </td>
        <td width="70%">'.$row['subjekaduan'].'</td>
       </tr>
       ';
  $htmlrow=$htmlrow.$data;
}
$final= $html.$htmlrow.$htmltableend;


$mpdf = new \Mpdf\Mpdf();
$mpdf->SetHeader('KEJAKSAAN NEGERI LANDAK');
//$mpdf->WriteHTML('<img src="https://kejari.landakkab.go.id/images/headerlong.png" width="70%" height="70"/>');
//$mpdf->Image('files/images/frontcover.jpg', 0, 0, 210, 297, 'jpg', '', true, false);
$mpdf->WriteHTML('Sistem Informasi Digitalisasi Akuntabel Yuridis Aktual Komunikatif');
$mpdf->WriteHTML('<br /><br />');
$mpdf->WriteHTML('<h1 style="text-align:center"><center>DATA FORM PENGADUAN!</center></h1><br />'.$final);
$mpdf->SetHTMLFooter('
<table width="100%">
    <tr>
        <td width="33%">{DATE j-m-Y}</td>
        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
        <td width="33%" style="text-align: right;">https://kejari.landakkab.go.id/></td>
    </tr><tr><td width="33%"></td>
        <td width="33%" align="center"></td>
        <td width="33%" style="text-align: right;"><div class="barcodecell"><barcode code="A34698735B" type="CODABAR" class="barcode" /></td></tr>
</table>');
$mpdf->Output();
