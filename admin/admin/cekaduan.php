<?php
include "../config.php";
$noaduan = $_POST['noaduan'];
if ($noaduan != ""){
    $sql_query = "select * from pengaduan where nopengaduan='".$noaduan."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_assoc($result);       
    echo json_encode($row);
}