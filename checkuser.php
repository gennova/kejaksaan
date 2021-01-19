<?php
session_start();
include "config.php";

$uname = $_POST['username'];
$password =$_POST['password'];
$_SESSION['uname'] = $uname;
if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser,leveluser,usernm from users where usernm='".$uname."' and passwd=PASSWORD('".$password."')";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];
    $level = $row['leveluser'];

    if($count > 0){
        $_SESSION['coba'] = 'vithaaaaaaaaaaaaaa';        
        $_SESSION['level'] = $level;
        $myObj = new stdClass();
        $myObj->name = $uname;
        $myObj->state = $count;
        $myObj->level = $level;
        $myObj->message = "Login Success";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else{
        echo 0;
    }

}