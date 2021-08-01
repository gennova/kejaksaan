<?php
include "../config.php";
$id=$_POST['id'];
$pengirim = $_POST['pengirim'];
$tujuan = $_POST['tujuan'];
$pesan = $_POST['isipesan'];

echo $pengirim.'<br/>'.$tujuan.'<br/>'.$pesan;

if ($pengirim != ""&&$pesan!=''&& $tujuan!=''){
    $sql_query = "update pesan set pesan='".$pesan."',pengirim='".$pengirim."',remark='".$tujuan."' where id=".$id."";
    if (mysqli_query($con, $sql_query)) {
    echo "Record insertted successfully";
    header("Location: index.php");
    } else {
     echo "Error updating record: " . mysqli_error($con);
   }

}