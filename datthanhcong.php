
<?php
session_start();
require_once "./config/connect.php";
$action = isset($_GET['order']);
$datetime = date("Y-m-d");
$c= $_SESSION['cart'];
if ($action == 'order') {
//    $n = isset($_POST['madh']) ? $_POST['madh'] : '';
if(isset($_SESSION['email']))
{
    $time = date("Y-m-d");
    $timegiaohang=date("Y-m-d");
    $s = isset($_GET['tenkh']) ? $_GET['tenkh'] : '';
    $m = isset($_GET['diachi']) ? $_GET['diachi'] : '';
    $e = isset($_GET['email']) ? $_GET['email'] : '';
    $sdt = isset($_GET['sdt']) ? $_GET['sdt'] : '';
    $sqls="select * from khachhang where email='$e'";
    $dhtt=executeSingleResult($sqls);

    $tonggia=isset($_GET['tonggia']) ? $_GET['tonggia'] : '';
    $trangthai='1';
    $makh=$dhtt['makh'];
    $dongia = isset($_GET['tonggia']) ? $_GET['tonggia'] : '';
    $sl = isset($_GET['soluong']) ? $_GET['soluong'] : '';
 
    if($cacsanpham='')
    {
     $cacsanpham=$c['tensp'];
    }
        foreach ($c as $l){
         $cacsanpham = $cacsanpham.'SL: x '.$l['qty'].' '.$l['tensp'];
        }
    $sqlm = "insert into donhang(makh,ngaydat,ngaygiao,trangthai,tensp,gia,tenkh,diachi,email,sdt) 
    values('$makh','$time','$timegiaohang','$trangthai','$cacsanpham','$tonggia','$s','$m','$e','$sdt')";

    //insert into donhang(makh,ngaydat,ngaygiao,trangthai,tensp,gia,tenkh,diachi,email,sdt) values('1','2022-04-23','2022-05-12','Chờ Xác Nhận','dsfasfs','3132131','phukun','55a luu huu phuoc','anhdansgvn@gmail.com','0938772416')
    $dathangtt=execute($sqlm);
    unset($_SESSION['cart']);
    header("location:thongbaodathang.php");
}
if(!isset($_SESSION['email'])){
header("location:dangnhap.php");
exit;
}
}

$doi = number_format($_GET['tonggia'],0,',','.');
// echo '<pre>';
// print_r($_GET);
// echo'</pre>';
// exit();
require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";
require 'PHPMailer-master/src/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->CharSet  = "utf-8";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $nguoigui = 'hoangxuan14022014@gmail.com';
    $matkhau = 'vrgeqwtzznjwkdkd';
    $tennguoigui = 'Sài Gòn XHNTP - Website Bán LapTop';
    $mail->Username = $nguoigui;
    $mail->Password = $matkhau;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;              
    $mail->setFrom($nguoigui, $tennguoigui);
    $mail->addAddress(" $e ");
    $mail->isHTML(true);
    $mail->Subject = 'Sài Gòn XHNTP Computer PC';
    $noidungthu = "<table border='1' >
        <tr>
        <td>Tên Khách Hàng</td>
        <td>Tên Sản Phẩm</td>
        <td>Giá Sản Phẩm</td>
        <td>Số Lượng</td>
        </tr>
        <td>$s</td>
        <td>$doi</td>
        <td>$</td>
        <td>$sl</td>
 </table>";
//     $noidungthu = "<h2>Khách hàng đã mua $f </h2>";
    $mail->Body = $noidungthu;
    $mail->smtpConnect(array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    ));
    $mail->send();
} catch (Exception $e) {
    echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}
//  header('location:datthanhcong.php');    
?>

<script>
   var tong = 0;
   $('.sum').each(function (index, element) {
      let temp = $(element).find('h6').html();
      tong += Number(temp.replaceAll('.', ''));
      console.log(tong);
   });
   $('.total strong').text(tong.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
   var tongs=0;
   $('.total').each(function (index, element) {
      let temps = $(element).find('strong').html();
      tongs = Number(temps.replaceAll('.',','));
      console.log(temps);
   });
   $('.total input').text(tongs.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
</script>
<!-- Start Footer -->
<?php include './subpages/footer.php'?>
<!-- End Footer -->

</html>