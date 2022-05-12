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
	<!--End Ảnh bìa -->
	<div id="columns" class="container">
		<div class="row">
			<section>
				<div id="content-sidebar" class="content-sidebar col-md-12">
					<div class="module-01 clearfix">
						<div class="dm-1 danhmuc clearfix">
							<div class="t-title" data-colum='10'>Đơn Hàng Hiện Có</div>
                            <div class="cover-div-donhang">
                            <?php
                            if(!isset($_SESSION['taikhoan'])){
                                header("location:dangnhap.php");
                            }
                            if(isset($_SESSION['taikhoan']))
                            $sql="select * from donhang where trangthai='4'";
                            $dh=executeResult($sql);
                            foreach($dh as $dhh)
                            {
                            ?>
                            <div class="div-donhang">
                                <img src="./images/donhang.png">
                                <div class="div-donhang-madonhang">Mã Đơn Hàng: <?php echo $dhh['madh']?></div>
                            </div>
                            <?php
                            }
                            ?>
                            </div>
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