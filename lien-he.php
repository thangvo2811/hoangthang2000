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
							<div class="t-title" data-colum='10'>Liên hệ shop</div>
                            <div class="map-info-lien-he">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9540677650575!2d106.67786559999999!3d10.738023599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad027e3727%3A0x2a77b414e887f86d!2zMTgwIMSQLiBDYW8gTOG7lywgUGjGsOG7nW5nIDQsIFF14bqtbiA4LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1651295143172!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div class="info-lien-he">
                                <label>Hot line: </label>
                                <label><i class="fas fa-phone-alt"></i> 0938772416</label>
                                <label><i class="fas fa-phone-alt"></i> 0767727911</label>
                                <label>Địa chỉ: </label>
                                <label><i class="fas fa-map-marker-alt"></i> 180 cao lỗ phường 4 quận 8</label>
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
<div class="xacnhan-huydonhang">    
	<div class="xacnhan-huydonhang-content">
	<label>Bạn muốn hủy đơn hàng này chứ</label>
	<Button><a href="./huydonhang.php?madh=<?php echo $dh['madh']?>">Xác nhận</a></Button>
	<Button  class="cancle-huydon">Cancel</Button>
	</div>
</div>
<script>
	document.getElementById("huydon").addEventListener("click", function(){
		document.querySelector(".xacnhan-huydonhang").style.display = "flex";
	})
	document.querySelector(".cancle-huydon").addEventListener("click",function(){ 
		document.querySelector(".xacnhan-huydonhang").style.display = "none";
	})

</script>