<?php
include "../config.php";

$namapengantar = $_POST['namapengantar'];
$namapenerima = $_POST['namapenerima'];
$namabarang = $_POST['namabarang'];
$alamatpenerima = $_POST['alamatpenerima'];
$keterangan = $_POST['keterangan'];

if ($namapengantar != ""){
    $sql_query = "insert into daftarbuktiserahterima(namapengantar,namapenerima,namabarang,alamat,keterangan) values ('".$namapengantar."','".$namapenerima."','".$namabarang."','".$alamatpenerima."','".$keterangan."')";
    if (mysqli_query($con, $sql_query)) {
    echo "Record inserted successfully";
    } else {
     echo "Error inserted record: " . mysqli_error($con);
   }
}
header('Location: barangbukti.php');