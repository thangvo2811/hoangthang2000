<!DOCTYPE html>
<html dir="direction" lang="vi" xml:lang="vi" xmlns="https://www.w3.org/1999/xhtml">
	<link rel="stylesheet" href="./access/css/sign-up.css">
<!--<![endif]-->

<head>
	<!-- script and bootstrap css -->
	<?php include './subpages/head.php'?>
</head>
<?php
include './signup.php';
require_once './config/connect.php';
?>
<body id="body" class="class_body_t">
	<?php include './subpages/body.php'?>
	</nav>
	<header id="header" class="">
		<!-- header contact -->
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
	<form action="" method="post">
<div class="container">
	<div class="modal-container">
		<header class="modal-header">
		<p class="text-sign-up">Đăng Ký</p>
		</header>
	<div class="modal-body">
			<label for="" class="modal-label">Họ và tên: </label>
			<input type="text" placeholder="Vui lòng nhập họ và tên" name="fullname" class="modal-input">
				<div class="has-error"><?php echo(isset($err['fullname'])?$err['fullname']:'')?></div>
			<label for="" class="modal-label" >Tên đăng nhập</label>
			<input type="text" placeholder="Nhập tên đăng nhập" name="username" class="modal-input" >
			<div class="has-error"><?php echo(isset($err['username'])?$err['username']:'')?></div>
			<label for=""  class="modal-label" >Số điện thoại</label>
			<input type="number" placeholder="Nhập số điện thoại" class="modal-input" name="sdt">
			<div class="has-error"><?php echo(isset($err['sdt'])?$err['sdt']:'')?></div>
			<label for="" class="modal-label">Mật khẩu </label>
   			<input type="password" placeholder="Nhập mật khẩu" name="psw" class="modal-input">
			   <div class="has-error"><?php echo(isset($err['psw'])?$err['psw']:'')?></div>	
			<label for="" class="modal-label">Nhập lại mật khẩu</label>
    		<input type="password" placeholder="Nhập lại mật khẩu" name="repsw" class="modal-input">
			<div class="has-error"><?php echo(isset($err['repsw'])?$err['repsw']:'')?></div>
			<label for="" class="modal-label">Email</label>
    		<input type="text" placeholder="Vui lòng email" name="email" class="modal-input">
			<div class="has-error"><?php echo(isset($err['email'])?$err['email']:'')?></div>
			<label for="" class="modal-label"><b>location</b></label>
   			 <input type="text" placeholder="Vui lòng nhập dịa chỉ" name="diachi" class="modal-input" >		
			<div class="has-error"><?php echo(isset($err['diachi'])?$err['diachi']:'')?></div>
			<div class="modal-body-map">
			<input type="submit" name="addres" value="Xác nhận">
				<?php
					if(isset($_POST['addres']))
					{
						$diachi=$_POST['diachi'];
						?>
						<iframe src="https://maps.google.com/maps?q=?<?php echo $diachi; ?>&output=embed"></iframe>
						<?php
					}
				?>
			</div>
		<div id="modal-footer">
			<button type="button" id="btn-cancel">Cancel</button>
      		<button type="submit" id="btn-sign-up">Đăng ký</button>
		</div>
	</div>
</div>
    
</form>
</body>
<!-- Start Footer -->
<?php include './subpages/footer.php'?>
<!-- End Footer -->

</html>