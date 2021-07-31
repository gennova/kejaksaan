<?php
include "../config.php";

$noperkara = $_POST['noperkara'];
$noaduan = $_POST['noaduan'];
$namapelapor = $_POST['namapelapor'];
$identitas = $_POST['identitas'];
$tgl_sidang = $_POST['tglsidang'];
$jam = $_POST['jam'];
$agenda = $_POST['agenda'];
$ruangan = $_POST['ruangan'];
$alasan = $_POST['alasan'];
$bukti = $_POST['barangbukti'];
$tahapan = $_POST['tahapan'];

if ($noaduan != ""){
    $sql_query = "insert into dataperkara(noperkara,noaduan,namapelapor,identitas,tglsidang,jam,agenda,ruangan,alasan,bukti,tahapan) values ('".$noperkara."','".$noaduan."','".$namapelapor."','".$identitas."','".$tgl_sidang."','".$jam."','".$agenda."','".$ruangan."','".$alasan."','".$bukti."','".$tahapan."')";
    if (mysqli_query($con, $sql_query)) {
    echo "Record inserted successfully";
    } else {
     echo "Error inserted record: " . mysqli_error($con);
   }
   $sql_query_udpate = "update pengaduan set statusaduan='".$tahapan."' where nopengaduan='".$noaduan."'";
   mysqli_query($con, $sql_query_udpate);
   if (mysqli_query($con, $sql_query_udpate)) {
    echo "Record update successfully";
    } else {
     echo "Error update record: " . mysqli_error($con);
   }
}
header('Location: pidanaumum.php');