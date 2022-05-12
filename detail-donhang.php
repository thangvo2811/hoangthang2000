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
            <?php
            if(isset($_SESSION['email']))
            $madh=$_GET['madh'];
            $sql="select * from donhang where madh='$madh'";
            $dh=executeSingleResult($sql);
            {
            ?>
			<section>
				<div id="content-sidebar" class="content-sidebar col-md-12">
					<div class="module-01 clearfix">
						<div class="dm-1 danhmuc clearfix">
							<div class="t-title" data-colum='10'>Đơn Hàng mã đơn hàng: <?php echo $dh['madh'] ?></div>
                            <div class="cover-detail-donhang">
								<div class="handle-setting-donhang">
									<label>Khách hàng</label>
									<div class="handle-setting-donhang-img">
										<img src="./images/donhang.png">
									</div>
									<div class="handle-setting-donhang-info">
										<label>Tên: <?php echo $dh['tenkh'] ?></label>
										<label>SDT: <?php echo $dh['sdt'] ?></label>
										<label>Địa chỉ: <?php echo $dh['diachi'] ?></label>
									</div>
								</div>
								<div class="handle-info-donhang">
									<label>Thông tin đơn hàng</label>
									<div class="handle-info-donhang-cover">
										<div class="handle-info-donhang-cover-info">
											<label>Mã đơn: <?php echo $dh['madh'] ?></label>
											<label>Ngày đặt: <?php echo $dh['ngaydat'] ?></label>
											<label>Ngày giao: <?php echo $dh['ngaygiao'] ?></label>
											<?php 
											if($dh['trangthai']==1)
											{
											 ?>
											<label style="color: blue;">Trạng Thái: Đang xác nhận</label>
											 <?php 
											}
											if($dh['trangthai']==2)
											{
											 ?>
											<label style="color: green;">Trạng Thái: Đang trên đường giao</label>
											<?php
											}
											if($dh['trangthai']==3)
											{
											 ?>
											<label style="color: red;">Trạng Thái: Đang hủy đơn</label>
											<?php
											}
											if($dh['trangthai']==6)
											{
											 ?>
											<label style="color: red;">Trạng Thái: Đã hủy bởi nhân viên đơn không hợp lệ</label>
											<?php
											}
											if($dh['trangthai']==4)
											{
											 ?>
											<label style="color: orange;">Trạng Thái: Giao Hàng Thành Công</label>
											<?php
											}
											?>
											<label>Thông tin sản phẩm: <?php echo $dh['tensp'] ?></label>
										</div>
									</div>
									<?php
									if($dh['trangthai']==1)
									{
									?>
									<button id="huydon" class="huydon"><a href="#">Hủy đơn hàng</a></button>
									<?php
									}
									if($dh['trangthai']==2)
									{
									?>
									<button onclick="alert('Đơn đang được giao tới bạn không thể hủy')">Hủy đơn hàng</button>
									<?php
									}
									?>
								</div>
							</div>
							<div class="map-xem-ship">
							<iframe src="https://maps.google.com/maps?q=?<?php echo $dh['diachi'];?>&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</section>
            <?php
            }
            ?>
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