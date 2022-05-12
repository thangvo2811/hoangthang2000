
<head>
	<!-- script and bootstrap css -->
	<?php include './subpages/head.php'?>
</head>
<?php
require_once "./config/connect.php";
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart']=[];
$action = isset($_POST['action']);
$c= $_SESSION['cart'];
foreach($c as $l)
{
   if($l['qty']=='0')
   {
      $masp=$l['masp'];
      unset($_SESSION['cart'][$masp]);
      header("location:dathang.php");
   }
}
// function guiMail();
// echo '<pre>';
//   header('location:datthanhcong.php');
?>
<body id="body" class="class_body_t">
	<?php include './subpages/body.php'?>
	</nav>
    <!-- header contact -->
    <header>
    <?php include './subpages/header.php'?>
        </header><!-- /header -->
	<nav class="navbar-container">
		<!--Start Danh mục -->
		<?php include './subpages/content.php'?>
		<!--End Danh mục -->
	</nav>
	<!--Start Ảnh bìa -->
	<?php include './subpages/anhbia.php'?>
	<!--End Ảnh bìa -->
	<main id="content">
	<div id="columns" class="container">
		<div class="row">
			<section>
			   <div id="content-sidebar" class="content-sidebar col-md-12">
			     	<div class="widget widget-static-block bg-white">
                  <div class="checkout-wrap space-base">
                     <div class="block-title">
                        <div class="h3">Đặt hàng</div>
                     </div>
                     <div class="block-content">
                                 <div class="checkout-content">
                           <form action="datthanhcong.php" enctype="multipart/form-data" class="form-horizontal">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                                 <!--REVIEW ORDER-->
                                 <div class="panel panel-info">
                                    <div class="panel-heading">
                                       Xem trước đơn hàng <div class="pull-right"><small><a class="afix-1" href="#">Đơn giá</a></small></div>
                                    </div>
                                    <div class="panel-body">
                                    <?php 
                                          foreach($c as $value)
                                          {
                                             ?>
                                          <div class="form-group">
                                             <div class="col-md-3 col-sm-3 col-xs-3">
                                                <a href="#">
                                                <img src="./images/<?php echo $value['madanhmuc']?>/<?php echo $value['img']?>">
                                                </a>
                                             </div>
                                             <div class="col-md-6 col-sm-6 col-xs-6">
                                             <?php echo $value['tensp']?>
                                             <input type="hidden" name="tensp" class="hiden" value="<?php echo $value['tensp']?>">
                                                <div class="quantity">
                                                   <small>Số lượng: <span><?php echo $value['qty']?></span></small>
                                                   <input type="hidden" name="soluong" class="hiden" value="<?php echo $value['qty']?>">
                                                </div>
                                             </div>
                                             <div class="col-md-3 col-sm-3 col-xs-3 text-right sum">
                                                <h6> <?php 
                                                $tongtien = number_format($value['giaban']* $value['qty'],0,',','.');
                                                echo $tongtien?></h6>
                                                 <input type="hidden" name="tonggia" class="hiden" value="<?php echo ($value['giaban']* $value['qty'])?>">
                                          
                                             </div>
                                       </div>
                                       <?php 
                                          }
                                          ?>
                                       <div class="form-group"><hr></div>
                                       <div class="form-group">
                                          <div class="col-md-12 col-xs-12 ">
                                             <strong>Tổng Tiền</strong>
                                             <div class="pull-right total">
                                                <input type="hidden" class='hidden' name="InputTotal" value="">
                                                <strong><?php echo $tongcong ?> </strong>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 <!--REVIEW ORDER END-->
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                                 <!--SHIPPING METHOD-->
                                 <?php 
                                 if(isset($_SESSION['email']))
                                 $m=$_SESSION['email'];
                                 $sql="select * from khachhang where email='$m'";
                                 $dathang=executeSingleResult($sql);
                                 {
                                 ?>
                                 <div class="panel panel-info">
                                    <div class="panel-heading">Thông tin người nhận</div>
                                    <div class="panel-body">
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Họ và tên:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="tenkh" class="form-control" id="InputName" value="<?php echo $dathang['tenkh']?>" readonly>
                                          </div>
                                                                  </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="diachi" class="form-control" id="InputAddress" value="<?php echo $dathang['diachi']?>" readonly>
                                          </div>
                                                                  </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Điện thoại:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="number"  class="form-control" name="sdt"  value="<?php echo $dathang['sdt']?>" readonly>
                                          </div>
                                                                  </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Email:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="email" class="form-control" name="email" id="InputEmailFirst" value="<?php echo $dathang['email']?>" readonly>
                                          </div>
                                          <input type="hidden" name='action' value='insertDH'>
                                                                  </div>
                                       <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input type="submit" name="order" id="submit" value="Đặt hàng" class="btn btn-primary btn-submit-fix">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php 
                                 }
                                 ?>
                                 <!--SHIPPING METHOD END-->
                              </div>
                              
                           </form>
                           <div class="clearfix"></div>
                        </div>
                        <!-- checkout-content -->
                     </div>
                  </div>
               </div>			   
            </div>
			</section>
			<div class="clearfix"></div>
		</div>
	</div>
</main>
	</div>
</body>
<script>
   function guiMail( ){
require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";
require 'PHPMailer-master/src/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->CharSet  = "utf-8";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $nguoigui = 'hoangxuan14022014@gmail.com';
    $matkhau = 'vrgeqwtzznjwkdkd';
    $tennguoigui = 'Website Bán LapTop-NXTHP';
    $mail->Username = $nguoigui;
    $mail->Password = $matkhau;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;              
    $mail->setFrom($nguoigui, $tennguoigui);
    $mail->addAddress("dh51800687@student.stu.edu.vn");
    $mail->isHTML(true);
    $mail->Subject = 'NXTHP PC';
    $noidungthu = "<h2>Khách hàng đã mua </h2>";
    $mail->Body = $noidungthu;
   //  $mail->smtpConnect(array(
   //      "ssl" => array(
   //          "verify_peer" => false,
   //          "verify_peer_name" => false,
   //          "allow_self_signed" => true
   //      )
   //  ));
    $mail->send();
} catch (Exception $e) {
    echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}
   }
</script>
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