
   <style>
       
       .container h1{
           text-align: center;
           padding-top:20px;
       }

       .modal-label{
           display: block;
           padding-top: 20px;
       }

       .modal-body input{
           width:100%;
           padding:6px 12px;
       }
       .modal-button {
        padding: 15px;
        text-align: center;
       }
       
       .modal-button .modal-cancel{
           padding: 9px 18px;
           background-color: #757575;
           color: black;
           cursor: pointer;
           transition: 0.4s;
           border: none;
       }

       .modal-button .modal-cancel:hover{
           color: #fff;
           background-color: #757575;
       }

       .modal-button .modal-update{
           padding: 9px 18px;
           background-color: #757575;
           color: black;
           cursor: pointer;
           transition: 0.4s;
           border: none;
       }

       .modal-button .modal-update:hover{
           color: #fff;
           background-color: #757575;
       }
       @media only screen {
               .modal-body{
                   width: 100%;
                   /* text-align: center; */
                   margin: auto;
       }
}
   </style>
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
<div class="container">
   <h1>THÔNG TIN CÁ NHÂN</h1>
   <?php
   $m=$_SESSION['email'];
   $sql="select * from khachhang where email='$m'";
   $nv = executeSingleResult($sql);
   {
   ?>
    <form  action="update-user.php" method="post"> 
        <div class="modal-body">
            <label class = "modal-label"><b>Mã khách hàng</b></label>
            <input type="text" name="makh" placeholder="<?php echo $nv['makh']?>" class="field left" readonly="readonly" disabled>
            <label class = "modal-label"><b>Tên Đăng Nhập</b></label>
            <input type="text" name="username" value="<?php echo $nv['username']?>">
            <label  class = "modal-label"><b>Tên Khách Hàng</b></label>
            <input type="text"  name="tenkh" value="<?php echo $nv['tenkh']?>">
            <label  class = "modal-label"><b>Số điện thoại</b></label>
            <input type="text"  name="sdt" value="<?php echo $nv['sdt']?>">
            <label class = "modal-label" ><b>Email</b></label>
            <input type="email" name="email" value="<?php echo $nv['email'] ?>" class="field left" readonly="readonly" >
            <p style="color:red;">*Không thể thay đổi email</p>
            <label class = "modal-label"><b>Địa chỉ</b></label>
            <input type="text"  name="diachi" value="<?php echo $nv['diachi']?>">
        </div>
        <div class="modal-button">
            <button type="submit" class="modal-update">Cập nhật</button>  
        </div>
        <input type="hidden" name="makh" value="<?php $nv['makh']?>">
        <input type="hidden" name="username" value="<?php $nv['makh']?>">
        <input type="hidden" name="makh" value="<?php $nv['makh']?>">
        <input type="hidden" name="makh" value="<?php $nv['makh']?>">
   </form>
   <?php
   }
   ?>
 </div>
</body>         
<!-- Start Footer -->
<?php include './subpages/footer.php'?>
<!-- End Footer -->

</html>
</body>
</html>