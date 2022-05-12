<?php 
require_once "../config/connect.php";
$sql = "select * from sanpham";
$laptop = executeResult($sql);
?>
<!DOCTYPE html>
<head>
<?php include "./subadmin/head.php" ?>
<?php 
if(!isset($_SESSION['taikhoan']))
{
	header("location:dangnhap.php");
}
?>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<?php  include "./subadmin/logo.php"?>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <?php  include "./subadmin/search.php"?>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <?php  include "./subadmin/menu.php"?>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
					<div class="col-md-12 stats-info stats-last widget-shadow">
						<div class="stats-last-agile">
							<table class="table stats-table " style="width:100%">
								<thead>
									<tr>
										<th>Sản Phẩm</th>
										<th>Trạng Thái</th>
										<th>Giá Bán</th>
										<th>Thương Hiệu</th>
										<th>Hình Ảnh</th>
                                        <th></th>
									</tr>
								</thead>
								<tbody>
                                <?php foreach($laptop as $item)
								{
									?>
									<tr>
										<td><?php  echo $item['tensp']?></td>
										<td><span class="label label-success"><?php  echo $item['trangthai']?></span></td>
										<td><h5><?php echo  number_format($item['giaban'],0,'.',',')?></h5></td>
										<td><h5><?php  echo $item['thuonghieu']?> </h5></td>
										<td><img src="../images/<?php echo $item['madanhmuc']?>/<?php echo $item['img']?>" width="70" height="75"></td>
                                        <td>
                                        <a href="edit.php?masp=<?php echo $item['masp'] ?>"><img src="../images/icons/hammer_screwdriver.png" width="15" height="15"></a>
                                        <a href="delete.php?masp=<?php echo $item['masp'] ?>"><img src="../images/icons/cross.png" width="15" height="15"></a></td>
                                        </tr>
                                    <?php } ?>
								</tbody>
                               
							</table>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
</body>
</html>
