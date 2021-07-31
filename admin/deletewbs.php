
<?php
include "../config.php";
$id	= $_GET['id'];

mysqli_query($con,"delete from pengaduan where id='$id'");

header('location: adminaduan.php');
?>