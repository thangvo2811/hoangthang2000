<?php 
require_once '../config/config.php';
$connect = new mysqli(HOST, USERNAME, PASSWORD,DATABASE );
$objPDO = new PDO("mysql:host=".HOST."; dbname=".DATABASE."", USERNAME, PASSWORD);
$objPDO->query('set names utf8');
$idsp = isset($_POST['masp']) ? $_POST['masp'] : '';
$namesp = isset($_POST['tensp']) ? $_POST['tensp'] : '';
$price = isset($_POST['giaban']) ? $_POST['giaban'] : '';
$status = isset($_POST['trangthai']) ? $_POST['trangthai'] : '';
$th = isset($_POST['thuonghieu']) ? $_POST['thuonghieu'] : '';
$image = isset($_FILES["img"]["name"]) ? $_FILES["img"]["name"] : '';
$iddanhmuc = isset($_POST['madanhmuc']) ? $_POST['madanhmuc'] : '';
if ($idsp==''){ header('location:index.php'); exit;}
$sql="update sanpham set tensp=?, giaban=?, trangthai=?, thuonghieu=?, madanhmuc=?, img=? where masp=? ";
// update sanpham set tensp='eo', giaban='10000', trangthai='Hết Hàng', thuonghieu='Acer', madanhmuc='laptop01' where masp='acer01'
$sua =[$namesp, $price, $status, $th, $iddanhmuc,$image,$idsp];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($sua);//ket qua truy van
$n = $objStatement->rowCount();
// echo '<pre>';
// print_r($_POST['img']);
// echo '</pre>';
// exit();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Kiểm tra xem tệp đã được tải lên mà không có lỗi hay không
   if(isset($_FILES["img"]) && $_FILES["img"]["error"] == 0){
       $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","webp" => "image/webp");
       $filename = $_FILES["img"]["name"];
       $filetype = $_FILES["img"]["type"];
       $filesize = $_FILES["img"]["size"];
    //    echo '<pre>';
    //    print_r($filename);
    //    echo '</pre>';
    //    exit();
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
 //   header('location:themsp.php');
  }
header('location:index.php');