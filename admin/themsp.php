<?php
require_once '../config/connect.php';
$sqls = "select * from danhmuc";
$listitem = executeResult($sqls);
$thuonghieudon="select * from sanpham";
$thuonghieudonb = executeResult($thuonghieudon);
$actionThem = isset($_POST['them']);


if ($actionThem == 'them') {
   $idsp = isset($_POST['masp']) ? $_POST['masp'] : '';
   $namesp = isset($_POST['tensp']) ? $_POST['tensp'] : '';
   $price = isset($_POST['giaban']) ? $_POST['giaban'] : '';
   $status = isset($_POST['trangthai']) ? $_POST['trangthai'] : '';
   $th = isset($_POST['thuonghieu']) ? $_POST['thuonghieu'] : '';
   $image = isset($_FILES["img"]["name"]) ? $_FILES["img"]["name"] : '';
   $iddanhmuc = isset($_POST['madanhmuc']) ? $_POST['madanhmuc'] : '';
   $cpu =  isset($_POST['ten']) ? $_POST['ten'] : ''; 
   $sql = "insert into sanpham(masp,tensp,giaban,trangthai,thuonghieu,img,madanhmuc,ten) values(?,?,?,?,?,?,?,?) ";
   $b =[$idsp, $namesp, $price, $status, $th, $image, $iddanhmuc, $cpu];
   $objStatement= $objPDO->prepare($sql);//return B
   $objStatement->execute($b);//ket qua truy van
   if ($connect->query($sql) === TRUE) {
      echo "Thêm dữ liệu thành công";
  } else {
      echo "Error: " . $sql . "<br>" . $connect->error;
  }

}
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Kiểm tra xem tệp đã được tải lên mà không có lỗi hay không
 if(isset($_FILES["img"]) && $_FILES["img"]["error"] == 0){
     $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","webp" => "image/webp");
     $filename = $_FILES["img"]["name"];
     $filetype = $_FILES["img"]["type"];
     $filesize = $_FILES["img"]["size"];
    //  echo '<pre>';
    //  print_r($_FILES);
    //  echo '</pre>';
    //  exit();
     // Xác minh phần mở rộng tệp
     $ext = pathinfo($filename, PATHINFO_EXTENSION);
     if(!array_key_exists($ext, $allowed)) die("Lỗi: Vui lòng chọn định dạng tệp hợp lệ.");
 
     // Xác minh kích thước tệp - tối đa 5MB
     $maxsize = 5 * 1024 * 1024;
     if($filesize > $maxsize) die("Lỗi: Kích thước tệp lớn hơn giới hạn cho phép.");
 
     // Xác minh loại MIME của tệp
     if(in_array($filetype, $allowed)){
         // Kiểm tra xem tệp có tồn tại hay không trước khi tải lên
         if(file_exists("../images/".$_POST['madanhmuc']."/" . $filename)){
             echo $filename . " đã tồn tại.";
         } else{
         //echo $_FILES["photo"]["tmp_name"];
         if(move_uploaded_file($_FILES["img"]["tmp_name"], "../images/".$_POST['madanhmuc']."/" . $filename)){ // có thể có lỗi
            echo "Tệp của bạn đã được tải lên thành công.";
         }else{
            echo "Lỗi: không thể di chuyển tệp đến upload/";
         }
         } 
     } else{
         echo "Lỗi: Đã xảy ra sự cố khi tải tệp của bạn lên. Vui lòng thử lại."; 
     }
 } else{
     echo "Error: " . $_FILES["img"]["error"];
 }
 header('location:themsp.php');
}

?>
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
                            <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Nhập Thông Tin Sản Phẩm </div>
                                    <div class="panel-body">
                                    <div class="form-group">
                                          <div class="col-md-12"><strong>Mã Sản Phẩm:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="masp" class="form-control" id="masp" value="">
                                          </div>
                                        </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Tên Sản Phẩm:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="tensp" class="form-control" id="tensp" value="">
                                          </div>
                                        </div>
                                       <div class="form-group">
                                          <div class="col-md-12"><strong>Giá Bán:</strong></div>
                                          <div class="col-md-12 ">
                                             <input type="text" name="giaban" class="form-control" id="giaban" value="">
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
                                              <?php foreach($thuonghieudonb as $thieu)
                                              {
                                                ?>
                                                <option value="<?php echo $thieu['thuonghieu']?>"><?php echo $thieu['thuonghieu']?></option>
                                                <?php                
                                              }
                                              ?>
                                               </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-12"><strong>Tên Danh Mục:</strong></div>
                                          <div class="col-md-12 ">
                                          <select name="madanhmuc" id="">
                                              <?php foreach($listitem as $itemdm)
                                              {
                                                ?>
                                                <option value="<?php echo $itemdm['madanhmuc']?>"><?php echo $itemdm['madanhmuc']?></option>
                                                <?php                
                                              }
                                              ?>
                                               </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-md-12 ">
                                          <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                                                  <label for ="img"> Tên tệp: </label>
                                                  <input type="file" name="img" id = "img">
                                                  <!-- <input type="submit" name="submit" value ="Tải lên"> -->
                                                  <p> <strong> Lưu ý: </strong> Chỉ cho phép các định dạng .jpg, .jpeg, .gif, .png, .webp với kích thước tối đa là 5 MB. </p>
                                             <!-- </form> -->
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-12"><strong>Chi Tiết</strong></div>
                                            <!-- <form > -->
                                            <textarea name="ten" id="ten"></textarea>
                                            <script>CKEDITOR.replace('ten');</script>
                                            <!-- </form> -->
                                        </div>
                                       <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                             <input type="submit" id="them" name="them" value="Thêm" class="btn btn-primary btn-submit-fix">
                                          </div>                                       
                                        </div>
                                             
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
