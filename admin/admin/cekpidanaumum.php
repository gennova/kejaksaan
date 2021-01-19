<?php
session_start();
$_SESSION['uname'] = '';
include "../config.php";
    $sql_query = "select count(*) as id from pengaduan where tujuan='pidanaumum'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $sql_query_perkara = "select count(noperkara) AS jmlperkara FROM dataperkara JOIN pengaduan ON dataperkara.noaduan=pengaduan.nopengaduan";
    $result_perkara = mysqli_query($con,$sql_query_perkara);
    $row_perkara = mysqli_fetch_array($result_perkara);

    $sql_query_tilang = "select count(id) as jml_tilang from datatilang";
    $result_tilang = mysqli_query($con,$sql_query_tilang);
    $row_tilang = mysqli_fetch_array($result_tilang);

        $count = $row['id'];
        $jml_perkara = $row_perkara['jmlperkara'];
        $jml_tilang = $row_tilang['jml_tilang'];
        $myObj = new stdClass();
        $myObj->aduan = $count;
        $myObj->perkara = $jml_perkara;
        $myObj->tilang = $jml_tilang;
        $myObj->message = "Data Pidana Umum";
        $myJSON = json_encode($myObj);
        echo $myJSON;