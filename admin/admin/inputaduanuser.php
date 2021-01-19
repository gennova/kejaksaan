<?php
session_start();
include "../config.php";

$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$noaduan ='ADUAN-'.substr(str_shuffle($permitted_chars), 0, 10);
$uname = $_POST['username'];
$namapelapor = $_POST['namapelapor'];
$alamatpelapor =$_POST['alamatpelapor'];
$emailpelapor =$_POST['emailpelapor'];
$telponpelapor =$_POST['telponpelapor'];
$namaterlapor =$_POST['namaterlapor'];
$jabatanterlapor =$_POST['jabatanterlapor'];
$satuanterlapor =$_POST['satuanterlapor'];
$subjekaduan =$_POST['subjekaduan'];
$tujuan =$_POST['tujuan'];

echo $noaduan.'<br />'.$uname.'<br />'.$namapelapor.'<br />'.$alamatpelapor.'<br />'.$emailpelapor.'<br />'.$telponpelapor.'<br />'.$namaterlapor.'<br />'.$jabatanterlapor.'<br />'.$satuanterlapor.'<br />'.$subjekaduan.'<br />'.$tujuan;

if ($uname != "" && $namapelapor != ""){
    $sql_query = "insert into pengaduan(nopengaduan,uname,namapelapor,alamatpelapor,emailpelapor,telponpelapor,namaterlapor,jabatanterlapor,satuanterlapor,subjekaduan,tujuan) values ('".$noaduan."','".$uname."','".$namapelapor."','".$alamatpelapor."','".$emailpelapor."','".$telponpelapor."','".$namaterlapor."','".$jabatanterlapor."','".$satuanterlapor."','".$subjekaduan."','".$tujuan."');";
    if (mysqli_query($con, $sql_query)) {
    echo "Record insertted successfully";
    header("Location: homeuser.php");
    } else {
     echo "Error updating record: " . mysqli_error($con);
   }

}