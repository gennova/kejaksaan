<?php
include "../config.php";

$running = $_POST['isipesan'];

if ($running != ""){
    $sql_query = "update running set text='".$running."'";
    if (mysqli_query($con, $sql_query)) {
    echo "Record inserted successfully";
    } else {
     echo "Error inserted record: " . mysqli_error($con);
   }
}
header('Location: index.php');