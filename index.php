
<head>
	<!-- script and bootstrap css -->
	<?php include './subpages/head.php'?>
</head>
<?php
require_once './config/connect.php';
// unset($_SESSION['taikhoan']);
// exit;
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
							<div class="t-title" data-colum='10'>Laptop - Thương Hiệu</div>
							<div class="div-danhmuc-sanpham">
							<?php
								$sql="select * from sanpham where madanhmuc='2'";
								$v=executeResult($sql);
								include './subpages/find_pc_by_Category.php';
							?>
							</div>
						</div>
						<a href='./find_by_catergory.php?tendanhmuc=LapTop&madanhmuc=2' class="btn t-btn-more btn-primary">Xem Thêm</a>
						<div class="dm-2 danhmuc clearfix">
							<div class="t-title" data-colum='4'>PC Gaming</div>
							<div class="div-danhmuc-sanpham">
							<?php
							$sql="select * from sanpham where madanhmuc='5'";
							$v=executeResult($sql);
							include './subpages/find_pc_by_Category.php';
							?>
							</div>
						</div>
						<a href='./find_by_catergory.php?tendanhmuc=PC Gaming&madanhmuc=5' class="btn t-btn-more btn-primary">Xem Thêm</a>
						<div class="dm-3 danhmuc clearfix">
							<div class="t-title" data-colum='9'>PC Văn Phòng</div>
							<div class="div-danhmuc-sanpham">
							<?php
							$sql="select * from sanpham where madanhmuc='6'";
							$v=executeResult($sql);
							include './subpages/find_pc_by_Category.php';
							?>
							</div>
						</div>
						<a href='./find_by_catergory.php?tendanhmuc=PC Văn Phòng&madanhmuc=6' class="btn t-btn-more btn-primary">Xem Thêm</a>
						<div class="dm-4 danhmuc clearfix">
							<div class="t-title" data-colum='6'>Màn Hình Bán Chạy Nhất</div>
							<div class="div-danhmuc-sanpham">
							<?php
							$sql="select * from sanpham where madanhmuc='4'";
							$v=executeResult($sql);
							include './subpages/find_pc_by_Category.php';
							?>
							</div>
						</div>
						<div class="dm-4 danhmuc clearfix">
							<div class="t-title" data-colum='6'>Bàn Phím</div>
							<div class="div-danhmuc-sanpham">
							<?php
							$sql="select * from sanpham where madanhmuc='1'";
							$v=executeResult($sql);
							include './subpages/find_pc_by_Category.php';
							?>
							</div>
						</div>
						<a href='./find_by_catergory.php?tendanhmuc=Bàn Phím&madanhmuc=1' class="btn t-btn-more btn-primary">Xem Thêm</a>
						<div class="dm-5 danhmuc clearfix">
							<div class="t-title" data-colum='4'>Phụ Kiện</div>
							<div class="div-danhmuc-sanpham">
							<?php
							$sql="select * from sanpham where madanhmuc='7'";
							$v=executeResult($sql);
							include './subpages/find_pc_by_Category.php';
							?>
							</div>
						</div>
						<a href='./find_by_catergory.php?tendanhmuc=Phụ Kiện&madanhmuc=7' class="btn t-btn-more btn-primary">Xem Thêm</a>
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

</html>