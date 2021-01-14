<?php
include "../config.php";

$pengirim = $_POST['username'];
$tujuan = $_POST['tujuan'];
$pesan = $_POST['isipesan'];

echo $pengirim.'<br/>'.$tujuan.'<br/>'.$pesan;

if ($pengirim != ""&&$pesan!=''&& $tujuan!=''){
    $sql_query = "insert into pesan(pengirim,pesan,remark) values ('".$pengirim."','".$pesan."','".$tujuan."');";
    if (mysqli_query($con, $sql_query)) {
    echo "Record insertted successfully";
    header("Location: homeuser.php");
    } else {
     echo "Error updating record: " . mysqli_error($conn);
   }

}