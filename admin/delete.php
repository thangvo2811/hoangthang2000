<?php 
require_once '../config/config.php';
$connect = new mysqli(HOST, USERNAME, PASSWORD,DATABASE );
$objPDO = new PDO("mysql:host=".HOST."; dbname=".DATABASE."", USERNAME, PASSWORD);
$objPDO->query('set names utf8');
$m = isset($_GET['masp'])?$_GET['masp']:'';
if ($m !='')
{
    $sql="delete from sanpham where masp= ? ";
    $a =[$m];
    $objStatement= $objPDO->prepare($sql);//return B
    $objStatement->execute($a);//ket qua truy van
    //$n = $objStatement->rowCount();
}
header('location:index.php');