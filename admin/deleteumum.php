
<?php
include "../config.php";
$id	= $_GET['id'];

mysqli_query($con,"delete from umum where id='$id'");

header('location: adminaduanumum.php');
?>