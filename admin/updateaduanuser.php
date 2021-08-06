<?php
session_start();
include "../config.php";

$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$noaduan =$_POST['id'];
$namapelapor = $_POST['namapelapor'];
$alamatpelapor =$_POST['alamatpelapor'];
$emailpelapor =$_POST['emailpelapor'];
$telponpelapor =$_POST['telponpelapor'];
$namaterlapor =$_POST['namaterlapor'];
$jabatanterlapor =$_POST['jabatanterlapor'];
$satuanterlapor =$_POST['satuanterlapor'];
$subjekaduan =$_POST['subjekaduan'];
$tujuan =$_POST['tujuan'];

echo $namapelapor.'<br />'.$alamatpelapor.'<br />'.$emailpelapor.'<br />'.$telponpelapor.'<br />'.$namaterlapor.'<br />'.$jabatanterlapor.'<br />'.$satuanterlapor.'<br />'.$subjekaduan.'<br />'.$tujuan;

if ($noaduan != "" && $namapelapor != ""){
    $sql_query = "update pengaduan set namapelapor='".$namapelapor."',alamatpelapor='".$alamatpelapor."',emailpelapor='".$alamatpelapor."',telponpelapor='".$telponpelapor."',namaterlapor='".$namaterlapor."',jabatanterlapor='".$jabatanterlapor."',satuanterlapor='".$satuanterlapor."',subjekaduan='".$subjekaduan."',tujuan='".$tujuan."' where id=".$noaduan.";";
    if (mysqli_query($con, $sql_query)) {
    echo "Record update successfully";
    header("Location: homeuser.php");
    } else {
     echo "Error updating record: " . mysqli_error($con);
   }

}