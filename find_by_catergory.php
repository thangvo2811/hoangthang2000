<?php 
include './subpages/head.php';
?>
<?php
require_once './config/connect.php'
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
							<?php 
								$tendm = isset($_GET['tendanhmuc']) ? $_GET['tendanhmuc'] : '';
							$dm = isset($_GET['madanhmuc']) ? $_GET['madanhmuc'] : '';
														$sql = "select * from sanpham where madanhmuc='$dm'";
														$v = executeResult($sql);
							{
								?>
								<div class="t-title" data-colum='10'><?php echo $tendm ?></div>
						
							  <?php
							}
                                include './subpages/find_pc_by_Category.php'
                                ?>
								
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
