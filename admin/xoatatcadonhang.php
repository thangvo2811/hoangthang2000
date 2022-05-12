<?php
require_once '../config/connect.php';
$sql="delete from donhang where trangthai=6";
$dm=execute($sql);
header("location:cacdonhangbihuy.php");
?>