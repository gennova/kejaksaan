<?php
include "../config.php";

$visi = $_POST['konten'];
$menu = $_POST['menunya'];
$task = $_POST['tasknya'];

if ($visi != ""){

    $sql_query = "update home set konten='".$visi."' where menu='".$menu."'";
    if (mysqli_query($con, $sql_query)) {
    echo "Record updated successfully";
    } else {
     echo "Error updating record: " . mysqli_error($conn);
   }

}