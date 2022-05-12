<?php
require_once '../config/connect.php';
$sqls = "select * from danhmuc";
$listitemdm = executeResult($sqls);
$actionThem = isset($_GET['them']);

if ($actionThem == 'them') {
   $iddm = isset($_GET['madanhmuc']) ? $_GET['madanhmuc'] : '';
   $namedm = isset($_GET['tendanhmuc']) ? $_GET['tendanhmuc'] : '';
   $sql = "insert into danhmuc(madanhmuc,tendanhmuc) values(?,?) ";
   $b =[$iddm, $namedm];
   $objStatement= $objPDO->prepare($sql);//return B
   $objStatement->execute($b);//ket qua truy van
   if ($connect->query($sql) === TRUE) {
      echo "Thêm dữ liệu thành công";
  } else {
      echo "Error: " . $sql . "<br>" . $connect->error;
  }
  header('location:danhmuc.php');
}
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
                            <form method="get" action="" enctype="multipart/form-data" class="form-horizontal">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Nhập Danh Mục Sản Phẩm </div>
                                    <div class="panel-body">
                                    <div class="form-group">
                                          <div class="col-md-12"><strong>Mã Danh Mục</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="madanhmuc" class="form-control" id="madanhmuc" value="">
                                          </div>
                                        </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Tên Danh Mục:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="tendanhmuc" class="form-control" id="tendanhmuc" value="">
                                          </div>                         
                                       <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input type="submit" id="them" name="them" value="Thêm" class="btn btn-primary btn-submit-fix">
                                          </div>                                       </div>
                                    </div>
                                 </div>
                            </from>
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
