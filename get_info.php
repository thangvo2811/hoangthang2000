<?php 
require_once './config/connect.php';
require_once './config/connect.php';

$sql= "select * from khachhang";
$v = executeResult($sql);

// $ma = $_POST['makh'];
// $u = $_POST['username'];
// $p = $_POST['pw'];
// $ten = $_POST['tenkh'];
// $sdt = $_POST['sdt']
// $e = $_POST['email'];
// $diachi = $_POST['dchi'];


if (isset($_POST['editKH'])) {

    if (isset($_POST['username']) && isset($_POST['pw'])) {
        $userData = [
            'm_username' => $_POST['username'],
            'm_password' => $_POST['pw']
        ];
        if (isset($_POST['tenkh'])) {
            $userData['tenkh'] = $_POST['tenkh'];
        }
        if (isset($_POST['sdt'])) {
            $userData['m_sdt'] = $_POST['sdt'];
        }
        if (isset($_POST['email'])) {
            $userData['m_email'] = $_POST['email'];
        }
        if (isset($_POST['dchi'])) {
            $userData['m_dchi'] = $_POST['dchi'];
        }
        // header("location:info.php");
    }
}

?>