<head>
	<!-- script and bootstrap css -->
	<?php include './subpages/head.php';
    require_once './config/connect.php';
    ?>
</head>
<?php
require_once './config/connect.php';
?>
<body id="body" onload="getLocation();" class="class_body_t">
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
						<div class="map-ship">
						<div class="dm-1 danhmuc clearfix">
						<div class="t-title" data-colum='10'>Giao hàng</div>
                        <div class="cover-giao-hang">
                            <?php
                                require_once './config/connect.php';
                                $la=$_GET['latitue'];
                                $lo=$_GET['longtitude'];
                                if($la == null && $lo == null)
                                {
                                header('location:for-shipper.php');
                                }
								$madh=$_GET['madh'];
                                $sql="select * from donhang where madh='$madh'";
                                $khdc=executeSingleResult($sql);
                                    if($la != null && $lo != null)
                                        {
                                        ?>
										<label>Địa chỉ của bạn: <?php echo $la?><?php echo $lo?> </label>
										<label>Địa chỉ bạn cần giao: <?php echo $khdc['diachi'] ?></label>
                                        <label> Nhấp vào để sang trang google map</label>
                                        <a href="https://www.google.com/maps/dir/<?php echo $la?>,<?php echo $lo?>/<?php echo $khdc['diachi']?>"><button name="lay-diachi">Chuyển Hàng Ngay</button></a>
										<a href="giao-hang-thanh-cong.php?madh=<?php echo $khdc['madh']?>"><button>Đã giao hàng thành công</button></a>
                                        <?php
                                        }
                                      
                            ?>
                        </div>
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


