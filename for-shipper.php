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
           <?php
		   if(isset($_GET['madh']))
		   $madh=$_GET['madh'];
		   {
			   ?>
			<section>
				<div id="content-sidebar" class="content-sidebar col-md-12">
					<div class="module-01 clearfix">
						<form class="map-ship" action="./lay-dc.php">
						<div class="dm-1 danhmuc clearfix">
						<div class="t-title" data-colum='10'>Bạn đang giao đơn hàng: <?php echo $madh?></div>
							<input type="hidden" name="latitue" readonly>
							<input type="hidden" name="longtitude" readonly> 
							<input type="hidden" name="madh" value="<?php echo $madh ?>">
							<div class="cover-label-button-laydiachi">
								<label> Nhấp vào để lấy địa chỉ nơi bạn đang đứng </label>
								<button type="submit" name="lay-diachi">Lấy địa chỉ</button></a>
							</div>
						</div>
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</section>
			<?php
		   }
		   if(!isset($_GET['madh'])){
			   header("location:cacdon-chogiao.php");
		   }
			?>
		</div>
	</div>
</body>

<!-- Start Footer -->
<?php include './subpages/footer.php'?>
<!-- End Footer -->
<script>
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
}
}
function showPosition(position) {
  document.querySelector('.map-ship input[name="latitue"]').value = position.coords.latitude;
  document.querySelector('.map-ship input[name="longtitude"]').value = position.coords.longitude;
  // + position.coords.longitude
}
</script>
