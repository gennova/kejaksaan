<?php
include "../config.php";

$namapelanggar = $_POST['namapelanggar'];
$jadwalsidang = $_POST['jadwalsidang'];
$denda = $_POST['denda'];
$biaya = $_POST['biayaperkara'];
$noresi = $_POST['noresi'];
$pasal = $_POST['pasal'];
$barangbukti = $_POST['barangbukti'];
$keteranganbukti = $_POST['keterangan'];

if ($namapelanggar != ""){
    $sql_query = "insert into datatilang(nama,jadwalsidang,denda,biaya,noresi,pasal,barangbukti,keterangan) values ('".$namapelanggar."','".$jadwalsidang."','".$denda."','".$biaya."','".$noresi."','".$pasal."','".$barangbukti."','".$keteranganbukti."')";
    if (mysqli_query($con, $sql_query)) {
    echo "Record inserted successfully";
    } else {
     echo "Error inserted record: " . mysqli_error($con);
   }
}
header('Location: pidanaumum.php');