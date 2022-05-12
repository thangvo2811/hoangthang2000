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
                            if(!isset($_SESSION['email'])){
                                header("location:dangnhap.php");
                            }
                            if(isset($_SESSION['email']))
                            $m=$_SESSION['email'];
                            $sql="select * from donhang where email='$m'";
                            $dh=executeResult($sql);
                            foreach($dh as $dhh)
                            {
                            ?>
                            <div class="div-donhang">
                                <img src="./images/donhang.png">
                                <div class="div-donhang-madonhang">Mã Đơn Hàng: <?php echo $dhh['madh']?></div>
                                <?php
                                if($dhh['trangthai']==1)
                                {
                                    ?>
                                <div class="div-donhang-madonhang-left">Tình Trạng Đơn:   Đang xác nhận</div>
                                <div class="div-donhang-madonhang-right"><a href="./detail-donhang.php?madh=<?php echo $dhh['madh']?>"> Xem Chi Tiết </a></div>
                                <?php
                                }
                                ?>
                                 <?php
                                if($dhh['trangthai']==2)
                                {
                                    ?>
                                <div class="div-donhang-madonhang-left">Tình Trạng Đơn:   Đang trên đường giao</div>
                                <div class="div-donhang-madonhang-right"><a href="./detail-donhang.php?madh=<?php echo $dhh['madh']?>"> Xem Chi Tiết </a></div>
                                <?php
                                }
                                ?>
                                 <?php
                                if($dhh['trangthai']==3)
                                {
                                    ?>
                                <div class="div-donhang-madonhang-left">Tình Trạng Đơn:   Đang hủy đơn</div>
                                <div class="div-donhang-madonhang-right"><a href="./detail-donhang.php?madh=<?php echo $dhh['madh']?>"> Xem Chi Tiết </a></div>
                                <?php
                                }
                                ?>
                                <?php
                                if($dhh['trangthai']==4)
                                {
                                    ?>
                                <div class="div-donhang-madonhang-left">Tình Trạng Đơn:   Giao hàng thành công</div>
                                <div class="div-donhang-madonhang-right"><a href="./detail-donhang.php?madh=<?php echo $dhh['madh']?>"> Xem Chi Tiết </a></div>
                                <?php
                                }
                                ?>
                                    <?php
                                if($dhh['trangthai']==6)
                                {
                                    ?>
                                <div class="div-donhang-madonhang-left">Tình Trạng Đơn:   Đã hủy đơn hàng vì không hợp lệ</div>
                                <div class="div-donhang-madonhang-right"><a href="./detail-donhang.php?madh=<?php echo $dhh['madh']?>"> Xem Chi Tiết </a></div>
                                <?php
                                }
                                ?>
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