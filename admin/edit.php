<?php
require_once "../config/connect.php";
$connect = new mysqli("localhost","root","", "store");
$objPDO = new PDO("mysql:host=localhost; dbname=store", "root", "");
$objPDO->query('set names utf8');
$idsp = isset($_GET['masp'])?$_GET['masp']:'';
$sqle = "select * from danhmuc";
$bookListds = executeResult($sqle);
$sqlths = "select *from sanpham";
$bookListths = executeResult($sqlths);
$sqlth = "select *from tinhtranghang";
$bookListth = executeResult($sqlth);
if ($idsp =='')
{
    hearder('location:edit.php');
    exit();
}
    $sql="select * from sanpham where masp=?";
    $s =[$idsp];
    $objStatement= $objPDO->prepare($sql);//return B
    $objStatement->execute($s);//ket qua truy van
   //  $n = $objStatement->rowCount();
    $data = $objStatement->fetchAll(PDO::FETCH_OBJ);
    $data1 = $objStatement->fetch(PDO::FETCH_OBJ);
  //     echo '<pre>';
  //     print_r($data);
  //     echo'</pre>';
  //  exits();
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
                            <form method="post" action="update.php" enctype="multipart/form-data" class="form-horizontal">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Sửa Thông Tin Sản Phẩm </div>
                                    <div class="panel-body">
                                    <div class="form-group">
                                          <div class="col-md-12"><strong>Mã Sản Phẩm:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="masp" class="form-control" id="masp" value="<?php echo $data[0]->masp ?>" class="field left" readonly="readonly">
                                          </div>
                                        </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Tên Sản Phẩm:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="tensp" class="form-control" id="tensp" value="<?php echo $data[0]->tensp ?>">
                                          </div>
                                        </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Giá Bán:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="giaban" class="form-control" id="giaban" value="<?php echo  $data[0]->giaban?>" >
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-12"><strong>Trạng Thái:</strong></div>
                                          <div class="col-md-12 ">
                                          <input type="text" name="trangthai" class="form-control" id="trangthai" value="">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-12"><strong>Thương Hiệu:</strong></div>
                                          <div class="col-md-12 ">
                                          <select name="thuonghieu" id="">
                                              <?php foreach($bookListths as $sqlths)
                                              {
                                                ?>
                                                <option value="<?php echo $sqlths['thuonghieu']?>"><?php echo $sqlths['thuonghieu']?></option>
                                                <?php                
                                              }
                                              ?>
                                               </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-12"><strong>Mã Danh Mục:</strong></div>
                                          <div class="col-md-12 ">
                                          <select name="madanhmuc" id="">
                                              <?php foreach($bookListds as $itemdm)
                                              {
                                                $selected='';
                                                if($itemdm['madanhmuc']==$data[0]->madanhmuc)
                                                    $selected='selected';
                                                ?>
                                                <option value="<?php echo $itemdm['madanhmuc'] ?>" <?php echo $selected ?> > <?php echo  $itemdm['madanhmuc'] ?></option>
                                                <?php                
                                              }
                                              ?>
                                               </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-12"><strong>Ảnh Hiện Tại:</strong></div>
                                          <div class="col-md-12 ">
                                             <td><img src="../images/<?php echo $data[0]->madanhmuc?>/<?php echo $data[0]->img?>" width="200" height="200" 	></td>
                                             <!-- <input type="text" class="form-control" name="img" id="thuonghieu" value=""> -->
                                          </div>
                                          <!-- <div class="col-md-12"><strong>Thêm Ảnh:</strong></div> -->
                                          <div class="col-md-12 ">
                                          <label for ="img"> Thêm Ảnh: </label>
                                                  <input type="file" name="img" id = "img">
                                             <!-- <input type="text" class="form-control" name="img" id="thuonghieu" value=""> -->
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-12"><strong>Chi Tiết</strong></div>
                                            <!-- <form > -->
                                            <textarea name="ten" id="ten" ><?php echo $data[0]->ten?></textarea>
                                            <script>CKEDITOR.replace('ten');</script>
                                            <!-- </form> -->
                                        </div>
                                       <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input type="submit" id="sua" name="sua" value="Sửa" class="btn btn-primary btn-submit-fix">
                                          </div>                                       </div>
                                    </div>
                                 </div>
                            </from>
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
