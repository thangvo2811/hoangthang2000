<?php
require_once './config/connect.php';
session_start();
$err=[];
if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];
    $username= $_POST['username'];
    $tenkh=$_POST['tenkh'];
    $sdt=$_POST['sdt'];
    $makh=$_POST['makh'];
    $diachi=$_POST['diachi'];
    print_r($email);
    print_r($username);
    print_r($tenkh);
    print_r($sdt);
    print_r($makh);
    print_r($diachi);
    $sql="select * from khachhang where email='$email'";
    $useru=executeSingleResult($sql);
    print_r($useru);
    // if($email != null)
    // {
    // $err['emailem']='Không được nhập email';
    // }
    // if($makh != null)
    // {
    // $err['makhem']='Không được nhập Makh';
    // }
    if(empty($sdt))
    {
        $sdt=$useru['sdt']; 
    }
    if(empty($diachi))
    {
        $diachi=$useru['diachi'];
    }
    if(empty($err))
    {
        $password=md5($password);
        $sqlup="update khachhang set tenkh='$tenkh',sdt='$sdt',diachi='$diachi' where email='$email'";    
        $upuser=execute($sqlup);
        header("location:info.php");
    }
}
?>