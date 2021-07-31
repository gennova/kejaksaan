<?php
include "../config.php";

$username = $_POST['usernamenya'];
$nama = $_POST['namanya'];
$level = $_POST['levelnya'];
$password = $_POST['passwordnya'];

echo $pengirim.'<br/>'.$tujuan.'<br/>'.$pesan;

if ($pengirim != ""&&$pesan!=''&& $tujuan!=''){
    $sql_query = "update user set nama='".$nama.",passwd=PASSWORD('".$password."')' where usernm='".$username."' and leveluser='".$level."';";
    if (mysqli_query($con, $sql_query)) {
    echo "Record update successfully";
    header("Location: index.php");
    } else {
     echo "Error updating record: " . mysqli_error($conn);
   }

}