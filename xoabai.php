<?php
require_once './config/connect.php';
$mabl = $_GET['id_bl'];
$masp = $_GET['masp'];
$sql="delete from binhluan where id_bl='$mabl'";
$delete=execute($sql);
header("location:detail.php?masp=$masp");
?>