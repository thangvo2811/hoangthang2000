<?php
require_once './config/connect.php';
$mabl = $_GET['id_bl'];
$masp = $_GET['masp'];
print_r($mabl);
print_r($masp);
$noidung = $_GET['noidungn'];
print_r($noidung);
$sql="update binhluan set noidung='$noidung' where id_bl='$mabl' and masp='$masp'";
$update=execute($sql);
header("location:detail.php?masp=$masp")
?>