<head>
	<!-- script and bootstrap css -->
	<?php include './subpages/head.php';
    require_once './config/connect.php';
    ?>
</head>
<body id="body" class="class_body_t">
	<?php include './subpages/body.php'?>
	</nav>
	<header id="header" class="">
		<!-- header contact -->
    <?php include './subpages/header.php' ?>
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
                  <div class="order-result">
                            <p class="title-m">Cảm ơn đơn đặt hàng của bạn!</p>
                              <p>Sài Gòn XHNTP Computer PC sẽ liên hệ quý khách trong vòng 24h làm việc</p>
                              <p class="str">Luôn giữ điện thoại bên cạnh bạn nhé!</p>
            
            </div>
            <div class="button">
               <a href="http://localhost/banhang" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Tiếp tục mua hàng</a>
            </div>
         </div>
                        </div>
   </div>
</div>			   </div>
			</section>
			<div class="clearfix"></div>
		</div>
	</div>
</main>
	</div>
</body>
<script>
    setTimeout(()=>{
        window.location.index;
    },5000);
</script>
<?php include './subpages/footer.php'?>