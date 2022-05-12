<?php
require_once '../config/connect.php';
session_start();
if(isset($_GET['Login']))
{
    $sm = $_GET['user'];
	print_r($taikhoan);
    $mk = $_GET['pass'];
	print_r($matkhau);
	$sql="select * from nhanvien where taikhoan='$sm'";
	$op=executeSingleResult($sql);
	
		if($sm==$op['taikhoan'] && $mk==$op['matkhau'])
		{
			if($op['phanquyen'] == '01' || $op['phanquyen'] == '02')
			{
				$_SESSION['taikhoan'] = $sm;
				header("location:index.php");
			}
			if($op['phanquyen']=='04')
			{
				$_SESSION['taikhoan'] = $sm;
				header("location:../index.php");
			}
		}
}
