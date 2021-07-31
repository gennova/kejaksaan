<?php
include "../config.php";
$id	= $_GET['id'];

mysqli_query($con,"delete from berita where id='$id'");

header('location: adminberita.php');
?>