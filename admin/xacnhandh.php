<?php 
require_once "../config/connect.php";
$a = isset($_GET['madh'])?$_GET['madh']:'';
if ($a != null)
{
  $sql = "update donhang set trangthai = '2' where madh = '$a'";
  $dhup=execute($sql);
  header("location:donhang.php");
}
