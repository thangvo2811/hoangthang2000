<head>
	<!-- script and bootstrap css -->
	<?php include './subpages/head.php';
    require_once './config/connect.php';
    ?>
</head>
<?php
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
	<?php include './login.php'?>
	<!--End Ảnh bìa -->
	<div id="columns" class="container">
		<div class="row">
			<section>
				<div id="content-sidebar" class="content-sidebar col-md-12">
					<div class="module-01 clearfix">
						<div class="dm-1 danhmuc clearfix">
						<form action="" method="post">
							<div class="t-title" data-colum='10'>Đăng nhập</div>
							<div class="cover-form-dangnhap">
								<label>login</label>
											<div class="cover-form-dangnhap-input">
												<input placeholder="<?php echo(isset($err['userlogin'])?$err['userlogin']:'Nhập email')?>" name="email" class="user" type="text">
												<input  placeholder="<?php echo(isset($err['passlogin'])?$err['passlogin']:'Nhập mật khẩu')?>" name="Password" class="pass" type="password">
												<div class="cover-form-dangnhap-button">
													<input type="submit" value="Login" name="Login">
													<h6><a href="./dangky.php">Đăng Ký Ngay</a></h6>
												</div>
											</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</section>
		</div>
	</div>
</body>
<!-- Start Footer -->
<?php include './subpages/footer.php'?>
<!-- End Footer -->