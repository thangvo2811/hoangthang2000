<?php
require_once './config/connect.php';
$madh=$_GET['madh'];
$sql="delete from donhang where madh='$madh'";
$deletedh=execute($sql);
header("location:donhang.php");
?>