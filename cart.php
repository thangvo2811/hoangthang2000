<head>
	<!-- script and bootstrap css -->
	<?php include './subpages/head.php';
	?>
</head>
<?php 
include "./config/connect.php";
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart']=[];
$action = isset($_POST['action']);
$actions = isset($_POST['actions']);
// exit();
if (isset($_POST['cong'])){
    $temp_id = $_POST['id'];
    foreach($_SESSION['cart'] as $key => $value){
        if($key == $temp_id)
        {
            $_SESSION['cart'][$temp_id]['qty'] +=1;
            header("location:cart.php");
        }
       
    }
}
// //hàm trừ số lượng
if (isset($_POST['tru'])){
    $temp_tru = $_POST['id'];
    foreach($_SESSION['cart'] as $key => $value){
        if($key == $temp_tru)
        {
        	$_SESSION['cart'][$temp_tru]['qty'] -=1;
        }else{
			header('location:cart.php');
		}
		
    }
}

//hàm xóa sản phẩm
if (isset($_GET['xoa'])){
    $temp_xoa = $_GET['id'];
    foreach($_SESSION['cart'] as $key => $value){
        if($key == $temp_xoa)
        {
               unset($_SESSION['cart'][$temp_xoa]);
        }
        	header("location:cart.php");
    }
}

$c= $_SESSION['cart'];
// hàm mua sản phẩm

$_SESSION['cart'] = $c;	
$c= $_SESSION['cart'];
if ($action=='add')
{
    $id = $_POST['id'];
    if (!isset($c[$id]))
    	$c[$id] = ['masp'=>$_POST['id'],'tensp'=>$_POST['name'],'status'=>$_POST['status'],'img'=>$_POST['img'],'madanhmuc'=>$_POST['madanhmuc'] ,'thuonghieu'=>$_POST['thuonghieu'],'giaban'=>$_POST['price'], 'qty'=>1];
	else 
		$c[$id]['qty'] +=1;
		header('location:cart.php');
}

$_SESSION['cart'] = $c;	
foreach($c as $l)
{
   if($l['qty']=='0')
   {
      $masp=$l['masp'];
      unset($_SESSION['cart'][$masp]);
      header("location:cart.php");
   }
}
if($c==null)
{
	header("location:index.php");
}
if(!isset($_SESSION['email'])){
	header("location:dangnhap.php");
}
// unset($_SESSION['cart']);
// exit;
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit();
?>
<body id="body" class="class_body_t">
	<?php include './subpages/body.php'?>
	</nav>
		<head>
		<!-- script and bootstrap css -->
		<?php include './subpages/header.php'?>
	</head>
	<nav class="navbar-container">
		<!--Start Danh mục -->
		<?php include './subpages/content.php'?>
		<!--End Danh mục -->
	</nav>
	<div id="columns" class="container">
		<div class="row">

			<section>
				<div id="content-sidebar" class="content-sidebar col-md-12">
					<style>
						.table-responsive .table td {
							vertical-align: middle;
						}
					</style>
					<div class="widget widget-static-block bg-white">
						<div class="cart-wrap space-base">
							<div class="block-title">
								<div class="h3">Giỏ hàng</div>
							</div>
							<div class="block-content">
								<div class="shopping-cart-table">
									<form method="post" action="" enctype="multipart/form-data">
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th class="text-center">Ảnh</th>
														<th class="text-center">Tên sản phẩm</th>
														<th class="text-center">Số lượng</th>
														<th class="text-center">Đơn giá</th>
														<th class="text-center">Tổng</th>
														<th class="text-center"> </th>
													</tr>
												</thead>
												<?php 
														foreach($c as $key => $item)
														{
														?>
												<tbody>
													<tr>
														<td class="col-md-1 text-left">
															<a href="./Detail.php?masp=<?php echo $item['masp']?>" class="thumbnail pull-left" style="margin: 0px;">
																<img src="./images/<?php echo $item['madanhmuc']?>/<?php echo $item['img']?>">
															</a>
														</td>
														<td class="col-md-4 text-left">
															<div class="media-body">
																<h1>
																	<?php echo $item['tensp']?>
																</h1>
															</div>
														</td>
														<td class="col-md-2 text-center">
															<h1>
																<?php echo $item['qty']?>
															</h1>
															<?php if($item['qty'] == 0)
																		{
																		?>
															<input type="text" name="id" class="hidden"
																value='<?php echo $key ?>' />
															<button name="cong">+</button>
															<?php 
																		}else
																		{
																		?>
															<form method="post">
																<input type="text" name="id" class="hidden"
																	value='<?php echo $key ?>' />
																<button name="tru">-</button>
																<input type="text" name="id" class="hidden"
																	value='<?php echo $key ?>' />
																<button name="cong">+</button>
															</form>
															<?php 
																	}
																	?>
														</td>
														<td class="col-md-2 text-center">
															<?php if($item['qty'] == 0)
																	{
																	?>
															<strong>
																<?php echo number_format($item['giaban']* $item['qty'],0,',','.') ?>
															</strong>
															<?php 
																	}else
																	{
																	?>
															<strong>
																<?php echo number_format($item['giaban'])?>
															</strong>
															<?php 
																	}
																	?>
														</td>
														<td class=" col-md-2 text-center tong">
															<?php if($item['qty'] == 0)
																	{
																	?>
															<strong>0</strong>
															<?php 
																	}else{
																	?>
															<strong>
																<?php echo number_format($item['giaban']* $item['qty'],0,',','.') ?>
															</strong>
															<?php 
																	}
																	?>
														</td>
														<td class="col-md-1 text-center clearfix">
															<form method="get">
																<input type="text" name="id" class="hidden"
																	value='<?php echo $key ?>' />
																<button name="xoa" class="btn btn-danger deletet">
																	<span class="fa fa-trash"></span>
																</button>
															</form>
														</td>
													</tr>
												</tbody>
												<?php 
															}
															?>
												<tfoot>
													<tr>
														<td> &nbsp; </td>
														<td> &nbsp; </td>
														<td> &nbsp; </td>
														<td> &nbsp; </td>
														<td class="text-left">
															<h3>Tổng tiền</h3>
														</td>
														<td class="text-right a">
															<h3>
																<strong>
																</strong>
															</h3>
														</td>
													</tr>
													<tr>
														<td> &nbsp; </td>
														<td> &nbsp; </td>
														<td> &nbsp; </td>
														
													</tr>
												</tfoot>
											</table>
										</div>
									</form>
									<td class="text-right">
									<form action="./dathang.php" method='post'>
									<tr>
														<!-- <button type="submit">							 -->
														</tr>
															<a href="./" class="btn btn-default">
																<i class="fa fa-shopping-cart"></i> Tiếp tục mua </a>
														</td>
														<td class="text-right">
														
																<?php foreach($c as $ck)
																{
																	?>
																	<input type='hidden' name='id' value='<?php echo $item['masp']  ?>'>
																	<input type='hidden' name='name' value='<?php echo $item['tensp']  ?>'>
																	<input type='hidden' name='img' value='<?php echo $item['img']  ?>'>
																	<input type='hidden' name='status' value='<?php echo $item['status']  ?>'>
																	<input type='hidden' name='thuonghieu' value='<?php echo $item['thuonghieu']  ?>'>
																	<input type='hidden' name='price' value='<?php echo $item['giaban']  ?>'>
																	<input type='hidden' name='madanhmuc' value='<?php echo $item['madanhmuc']  ?>'>
																	<input type=hidden name='sp' value='add'>
																	<?php
																}
																?>
														<tr>
														<?php
														$tongsl=0;
															$tongsl+=$item['qty'];
														if($tongsl==null)
														{
														?>
														<font color="#FF0000">*Vui lòng chọn số lượng</font>
														<?php
														}
														 else 
														{?>
															<button type="submit">
															<i class="fa fa-shopping-cart"></i> Đặt Hàng
														<?php 
														}
														?>
														</tr>
														</form>
														</td>


								</div>
							</div>
						</div>
					</div>
</body>
<script>
	var tong = 0;
	$('.tong').each(function (index, element) {
		console.log(element);
		let temp = $(element).find('strong').html();

		tong += Number(temp.replaceAll('.', ''));
		console.log(tong);
	});
	$('.a strong').text(tong.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
</script>
<!-- Start Footer -->
<?php include './subpages/footer.php'?>
<!-- End Footer -->

</html>