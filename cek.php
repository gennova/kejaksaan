<?php
session_start();
$_SESSION['uname'] = '';
include "config.php";

$uname = $_POST['username'];
$password =$_POST['pass'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];


if ($uname != "" && $password != ""){
    $sql_query = "insert into users(usernm,passwd,leveluser,nama,alamat,email,telpon,pekerjaan,pendidikan) values ('".$uname."',PASSWORD('".$password."'),'user','".$nama."','".$alamat."','".$email."','".$phone."','".$pekerjaan."','".$pendidikan."');";
    if (mysqli_query($con, $sql_query)) {
    echo "Record insertted successfully";
    header("Location: loginuser.html");
    } else {
     echo "Error updating record: " . mysqli_error($con);
   }

}