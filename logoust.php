<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["taikhoan"]);
header('location:index.php');
?>