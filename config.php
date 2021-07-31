<?php
$host = "localhost"; /* Host name */
$user = "kejari_jaksa"; /* User */
$password = "9DnUOlHPhhox"; /* Password */
$dbname = "kejari_jaksa"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}