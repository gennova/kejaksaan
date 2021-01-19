<?php
include "../config.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$masalah = $_POST['masalah'];
$myObj = new stdClass();
if ($nama != ""){
    $sql_query = "insert into umum(nama,alamat,pendidikan,pekerjaan,email,telpon,masalah) values ('".$nama."','".$alamat."','".$pendidikan."','".$pekerjaan."','".$email."','".$telpon."','".$masalah."')";
    if (mysqli_query($con, $sql_query)) {
    $myObj->message = "Success";
    } else {
     $myObj->message = "Error";
   }
}
$myJSON = json_encode($myObj);
echo $myJSON;