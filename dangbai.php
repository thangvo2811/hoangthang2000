<?php
session_start();
require_once './config/connect.php';
$m=$_SESSION['email'];
$sql="select * from khachhang where email='$m'";
$dbup=executeSingleResult($sql);
$makh=$dbup['makh'];
$noidung=$_GET['noidung'];
$masp=$_GET['masp'];
if(empty($noidung))
{
    $err['nd']='Vui lòng nhập nội dung';
    header("location:Detail.php?masp=$masp");
}
if(empty($err)){
$sql="insert into binhluan(masp,makh,noidung) values ('$masp','$makh','$noidung')";
$k=execute($sql);
header("location:detail.php?masp=$masp");
}
?>