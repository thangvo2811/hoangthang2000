<?php
require_once './config/connect.php';

?>
<head>
    <!-- script and bootstrap css -->
    <?php include './subpages/head.php'?>
</head>

<body id="body" class="class_body_t">
    <?php include './subpages/body.php'?>
    </nav>
    <header id="header" class="">
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
    <div id="columns" class="container">
        <div class="row">
            <section>
                <div id="content-sidebar" class="content-sidebar col-md-12">
                    <div class="module-01 clearfix">
                        <div class="dm-1 danhmuc clearfix">
                            <div class="t-title" data-colum='10'>Nội dung tìm kiếm</div>
                            <ul class="same-height">
                                <?php
                                if(isset($_POST['k'])){
                                    $s = $_POST['k'];
                                    $sql = "select madanhmuc, img,masp,tensp,giaban,trangthai,thuonghieu from sanpham
                                            where  tensp like '%$s%'";
                                }
                                $v = executeResult($sql);
                                    
                                            include './subpages/find_pc_by_Category.php';
                                    ?>
                            </ul>
                        </div>
                    </div>
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