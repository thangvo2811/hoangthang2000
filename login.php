<?php
 require_once './config/connect.php';
$err=[];
if (isset($_POST['Login'])) 
{ 

    $username = $_POST['email'];
    $password = $_POST['Password'];

    if(empty($username))
    {
        $err['userlogin']='* Vui lòng nhập tài khoản';
    }
    if(empty($password))
    {
        $err['passlogin']='* Vui lòng mật khẩu';
    }
    $sql = "select email, psword from khachhang where email='$username'";
    $v=executeResult($sql);
    foreach($v as $c)
    {
        if ($username != $c['email']) 
        {
            $err['userlogin']= '* Tên đăng nhập này không tồn tại.';
        }
    }
    $sql = "select * from nhanvien where taikhoan='$username'";
    $v=executeResult($sql);
    foreach($v as $c)
    {
        if ($username != $c['taikhoan']) 
            {
                $err['userlogin']= '* Tên đăng nhập này không tồn tại.';
            }
    }  
    if(empty($err)){
        $sql = "select * from nhanvien where taikhoan='$username'";
        $shiper=executeSingleResult($sql);
        if($shiper['taikhoan']==$username && $shiper['matkhau']==$password)
        {
        $_SESSION['taikhoan'] = $username;
        header('location:index.php');
        }
        if ($password != $shiper['matkhau']) {
            $err['passlogin']= '* Mật khẩu không đúng.';
        }
        
        if (!$username || !$password) {
            $err['userlogin']='* Sai mật khẩu hoặc tài khoản';
        }
        $sql = "select * from khachhang where email='$username'";
        $kh = executeSingleResult($sql);
        $password=md5($password);
        if($kh['email']==$username && $kh['psword']==$password)
        {
        $_SESSION['email'] = $username;
        header('location:index.php');
        }
        if ($password != $kh['psword']) {
            $err['passlogin']= '* Mật khẩu không đúng.';
        }
    }
}
?>