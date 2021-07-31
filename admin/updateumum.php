<?php
include "../config.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$masalah = $_POST['masalah'];
$myObj = new stdClass();
if ($nama != ""){
    $sql_query = "update umum set nama='".$nama."',alamat='".$alamat."',pendidikan='".$pendidikan."',pekerjaan='".$pekerjaan."',email='".$email."',telpon='".$telpon."',masalah='".$masalah."' where id=".$id."";
    //$sql_query = "update umum set nama='".$nama."', alamat='".$alamat."' where id=2";
    if (mysqli_query($con, $sql_query)) {
    $myObj->message = "Success";
    } else {
     $myObj->message = "Error";
   }
}
$myJSON = json_encode($myObj);
echo $myJSON;