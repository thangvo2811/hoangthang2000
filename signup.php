<?php 
$err=[];
require_once './config/connect.php';
if (isset($_POST['username']))
{
$username=$_POST['username'];
$fullname=$_POST['fullname'];
$password=$_POST['psw'];
$repass=$_POST['repsw'];
$email=$_POST['email'];
$sdt=($_POST['sdt']);
$diachi=$_POST['diachi'];
    if($password != $repass)
        {
           $err['psw']='* Mật khẩu không giống nhau';
           $err['repsw']='* Lập mật khẩu không giống nhau';
        }
    $sql="select * from khachhang";
    $v = executeResult($sql);
    foreach($v as $c)
    {
        if($username == $c['username'])
            {
                $err['username']='* Tài khoản này đã được sử dụng';
            }
        if($email == $c['email'])
            {
                $err['email']='* Email này đã được sử dụng';
            }
    }
    if(empty($username))
        {
            $err['username']='* Vui lòng nhập tài khoản';
        }
    if(empty($fullname))
        {
            $err['fullname']='* Vui lòng nhập họ và tên';
        }
    // Xử lý mật khẩu và lặp mật khẩu
    // if(empty($password))
    //     {
    //         $err['psw']='Vui lòng nhập mật khẩu';
    if(!empty($password))
    {
       if(strlen($password)<= 7)
       {
         $err['psw']='* Mật khẩu phải có ít nhất 7 chữ số';
       }
    }
        // }
    // if($password)
    //     {
    //       $err['psw']='Mật khẩu phải có ít nhất 7 chữ số';
    //     }
    if(empty($repass))
        {
            $err['repsw']='* Vui lòng nhập lại mật khẩu';
        }
    if(empty($sdt))
        {
            $err['sdt']='* Vui lòng nhập số điện thoại';
        }
    if (empty($sdt)) {
            $err['sdt'] = "* Số điện thoại là bắt buộc.";
        } 
    else {
            // Kiểm tra xem số điện thoại đã đúng định dạng hay chưa 
            if (!preg_match ("/^[0-9]*$/", $sdt) ) {
                $err['sdt'] = "* Bạn chỉ được nhập giá trị số.";
            }
            //Kiểm tra độ dài của số điện thoại 
            if (strlen ($sdt) != 10) {
                $err['sdt'] = "* Số điện thoại phải là 10 ký tự.";
            }
        }
    if(empty($email))
        {
            $err['email']='* Vui lòng nhập email';
        }
    if(empty($diachi))
    {
        $err['diachi']='* Vui lòng nhập địa chỉ';
    }
    
    if(empty($err)){
    $password=md5($password);
    $sql="insert into khachhang(username,psword,tenkh,sdt,email,diachi) values ('$username','$password','$fullname','$sdt','$email','$diachi')";
    $v = execute($sql);
    header("location:index.php");
    }
}
?>