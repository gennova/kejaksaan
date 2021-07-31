<?php
session_start();
include "config.php";

$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$noaduan ='ADUAN-'.substr(str_shuffle($permitted_chars), 0, 10);

$namapelapor = $_POST['namapelapor'];
$alamatpelapor =$_POST['alamatpelapor'];
$emailpelapor =$_POST['emailpelapor'];
$telponpelapor =$_POST['telponpelapor'];
$namaterlapor =$_POST['namaterlapor'];
$jabatanterlapor =$_POST['jabatanterlapor'];
$satuanterlapor =$_POST['satuanterlapor'];
$subjekaduan =$_POST['subjekaduan'];
$tujuan =$_POST['tujuan'];

 $sql_query = "insert into pengaduan(nopengaduan,namapelapor,alamatpelapor,emailpelapor,telponpelapor,namaterlapor,jabatanterlapor,satuanterlapor,subjekaduan,tujuan) values ('".$noaduan."','".$namapelapor."','".$alamatpelapor."','".$emailpelapor."','".$telponpelapor."','".$namaterlapor."','".$jabatanterlapor."','".$satuanterlapor."','".$subjekaduan."','".$tujuan."');";
    if (mysqli_query($con, $sql_query)) {
    echo "Data Tersimpan";
    echo "<br>";
    echo "<a href='index.php'>Kembali Ke Beranda</a>";
   
    } else {
     echo "Error updating record: " . mysqli_error($con);
   }
?>