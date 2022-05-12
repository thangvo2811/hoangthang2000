<?php 
require_once "../config/connect.php";

$sql="select * from donhang where trangthai='6'";
$dh = executeResult($sql);
?>
<!DOCTYPE html>
<head>
<?php include "./subadmin/head.php" ?>
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
    <?php  include "./subadmin/notification.php"?>
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
										<th>Mã đơn hàng</th>
                                        <th>Mã khách hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Ngày giao</th>
										<th>Trạng thái</th>
										<th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Email</th>
                                        <th>SĐT</th>
									</tr>
								</thead>
								<tbody>
                                <?php 
                                foreach($dh as $item)
                                {
                                ?>
									<tr>
                                    <td><?php echo $item['madh'] ?></td>
                                    <td><?php echo $item['makh'] ?></td>
                                    <td><?php echo $item['ngaydat'] ?></td>
                                    <td><?php echo $item['ngaygiao'] ?></td>
                                    <td><?php echo $item['trangthai']?></td>
                                    <td><?php echo $item['tensp']?></td>
                                    <td><?php echo number_format($item['gia'],0,',','.')?>đ</td>
                                    <td><?php echo $item['tenkh'] ?></td>
                                    <td><?php echo $item['diachi'] ?></td>
                                    <td><?php echo $item['email'] ?></td>
                                    <td><?php echo $item['sdt'] ?></td>
                                <?php 
                                } 
                                ?>
								</tbody>
                               
							</table>
						</div>
                        <a href="xoatatcadonhang.php"><button>Xóa hết các đơn hàng đã hủy</button></a>
					</div>
					<div class="clearfix"> </div>
				</div>
</section>
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
