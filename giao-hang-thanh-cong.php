<?php
require_once './config/connect.php';
$madh = $_GET['madh'];
$sql = "update donhang set trangthai=4 where madh='$madh'";
$dh=execute($sql);
header("location:for-shipper.php");
?>