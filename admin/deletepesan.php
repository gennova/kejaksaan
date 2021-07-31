
<?php
include "../config.php";
$id	= $_GET['id'];

mysqli_query($con,"delete from pesan where id='$id'");

header('location: admininbox.php');
?>