<?php 
require_once './config/connect.php';
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="direction" lang="vi" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="direction" lang="vi" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="direction" lang="vi" xml:lang="vi" xmlns="https://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
	<!-- script and bootstrap css -->
<?php include './subpages/head.php'?>
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
		<div id="columns" class="container">
			<div class="row">
				<section>
					<div id="content-sidebar" class=" content-sidebar col-md-12">
						<div class="module-01 clearfix">
							<div class="dm-1 danhmuc-chitiet clearfix">
								<div class="t-title" data-colum='10'>Chi Tiết Sản Phẩm</div>
								<?php 
								$sps = isset($_GET['masp']) ? $_GET['masp'] : '';
								$sql = "select * from sanpham where masp = '$sps'";
								$lpList = executeResult($sql);
								foreach ($lpList as $store)
								{
									?>
									<div class="Detail-handle img-chitiet">
									<div class="Detail-img">
									<img src="./images/<?php echo $store['madanhmuc']?>/<?php echo $store['img']?>" >
										<div class="button-holder">
											<form action="./cart.php" method='post'>
												<input type='hidden' name='id' value='<?php echo $store['masp']  ?>'>
												<input type='hidden' name='name' value='<?php echo $store['tensp']  ?>'>
												<input type='hidden' name='img' value='<?php echo $store['img']  ?>'>
												<input type='hidden' name='status' value='<?php echo $store['trangthai']  ?>'>
												<input type='hidden' name='thuonghieu' value='<?php echo $store['thuonghieu']  ?>'>
												<input type='hidden' name='price' value='<?php echo $store['giaban']  ?>'>
												<input type='hidden' name='madanhmuc' value='<?php echo $store['madanhmuc']  ?>'>
												<input type=hidden name='action' value='add'>
													<tr>
													<button type="submit">
													<i class="fa fa-shopping-cart"></i> Thêm vào giỏ
													</td>
													</tr>
											</form>
										</div>
									</div>
										<div class="Detail-item">
										<?php echo $store['ten'] ?>	
												</div>
									</div>
									<div class="t-title"  data-colum='10'>Đánh Giá Sản Phẩm</div>
								<?php									
								}
								?>
								<?php 
								if(isset($_SESSION['email']))
										{	
											$m=$_SESSION['email'];
											$binhluansps = isset($_GET['masp']) ? $_GET['masp'] : '';
											$sql="select * from khachhang where email = '$m'";
											$binhluan=executeSingleResult($sql);
											$sqlbl="select * from sanpham where masp='$binhluansps'";
											$tensp=executeSingleResult($sqlbl);
											$err=[];
											{
											?>
											<div class="binh-luan-sanpham">
														<div class="binh-luan-handle">
															<div class="binh-luan-user">
																<img src="./images/2.png"/>
															</div>
															<form action="./dangbai.php">
															<div class="binh-luan-label-textarea">
																<input type="hidden" name="masp" value='<?php echo $tensp['masp'] ?>'>
																<label><?php echo $binhluan['tenkh'] ?></label>
																<textarea name="noidung" id="" cols="30" rows="10" placeholder="<?php echo (isset($err['nd'])?$err['nd']:'Hãy viết suy nghĩ của bạn về sản phẩm này !')?>"></textarea>
																<Button>Đăng bình Luận</Button>
															</div>
															</form>
														</div>
											<?php 
											}
											?>
												<?php
												$m=$_SESSION['email'];
												$sql="select * from binhluan join khachhang on binhluan.makh=khachhang.makh where masp='$sps'";
												$usero=executeResult($sql);
												foreach($usero as $us)
												{
												?>
												
														<div class="binh-luan-other-user-handle">
															<div class="binh-luan-other-user">
																<div class="binh-luan-other-user-img">
																	<img src="./images/2.png"/>
																</div>
															
																<?php
															
																	if($m == $us['email'])
																	{
																		?>
																		<div class="binh-luan-other-user-label">
																			<label ><?php echo $us['tenkh'] ?></label>
																			<form action="./update_bai.php">
																			<input name="noidungn" value="<?php echo $us['noidung'] ?>">
																			<ul>
																				<input type="hidden" name="masp" value="<?php echo $us['masp']?>">
																				<input type="hidden" name="id_bl" value="<?php echo $us['id_bl']?>">
																				<li><button type="submit">Chỉnh Sửa</button></li>
																				</form>
																				<a href="./xoabai.php?id_bl=<?php echo $us['id_bl']?>&&masp=<?php echo $us['masp']?>">
																				<li>Xóa</li></a>
																			</ul>
																		</div>
																		<?php 
																	}
																	?>
																	<?php
																	if($m != $us['email'])
																	{
																		?>
																			<div class="binh-luan-other-user-label">
																				<label ><?php echo $us['tenkh'] ?></label>
																				<label ><?php echo $us['noidung'] ?></label>
																				<ul>
																					<a ><li>Thích</li></a>
																					<a><li>Không Thích</li></a>
																				</ul>
																			</div>
																		<?php 
																	}
																	?>
															</div>
														</div>	
												<?php
												}
												?>
														
											</div>
										
										<?php
										}
										?>
										<div class="binh-luan-sanpham">
										<?php
										if(!isset($_SESSION['email']))
										{	
												$sql="select * from binhluan join khachhang on binhluan.makh=khachhang.makh where masp='$sps'";
												$usero=executeResult($sql);
												foreach($usero as $us)
												{
												?>
													
																<div class="binh-luan-other-user-handle">
																	<div class="binh-luan-other-user">
																		<div class="binh-luan-other-user-img">
																			<img src="./images/2.png"/>
																		</div>
																		<div class="binh-luan-other-user-label">
																			<label ><?php echo $us['tenkh'] ?></label>
																			<label ><?php echo $us['noidung'] ?></label>
																		</div>
																	</div>
																</div>		
														
												<?php
												}
												?>
											<?php
										}		
										?>
										</div>		
										</div>	
									
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
