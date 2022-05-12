<ul class="same-height">
                                <?php
											foreach($v as $itema)
											{
											?>
										<li class="item wow bounceInRight product-item col-md-3 col-sm-3 col-xs-12 " data-wow-duration="2s" data-wow-delay="0s" data-limit='1'>
											<div class="product-item-info">
												<div class="product-top">
												<a href="./detail.php?masp=<?php echo $itema['masp']?>">
												<img src="images/<?php echo $itema['madanhmuc']?>/<?php echo $itema['img']?>">
												</a>
												</div>
												<!-- product-top -->
											<div class="product-item-details">
												<h4 class="product-name">
												<h1><?php echo $itema['tensp']?></h1>
												</h4>
												<div class="price-box">
												<h1><?php echo  number_format($itema['giaban'],0,'.',',')?>₫</h1>										
												</div>
												<a><?php echo  $itema['trangthai']?></a>	
											</div>
											<div class="button-holder">
											<form action="./cart.php" method='post'>
													<input type='hidden' name='id' value='<?php echo $itema['masp']  ?>'>
													<input type='hidden' name='name' value='<?php echo $itema['tensp']  ?>'>
													<input type='hidden' name='img' value='<?php echo $itema['img']  ?>'>
													<input type='hidden' name='status' value='<?php echo $itema['trangthai']  ?>'>
													<input type='hidden' name='thuonghieu' value='<?php echo $itema['thuonghieu']  ?>'>
													<input type='hidden' name='price' value='<?php echo $itema['giaban']  ?>'>
													<input type='hidden' name='madanhmuc' value='<?php echo $itema['madanhmuc']  ?>'>
													<input type=hidden name='action' value='add'>
												<tr>
												<!-- <i class="fa fa-shopping-cart"></i> -->
												<!-- <td><input type=submit value="Thêm Vào Giỏ" > -->
												<?php
												if(isset($_SESSION['email']))
												{
												?>
												<button type="submit">
												<i class="fa fa-shopping-cart"></i> Thêm vào giỏ
												</td>
												</tr>
												<?php
												}
												if(!isset($_SESSION['email']))
												{
												?>
												<button onclick="alert('Vui lòng đăng nhập')">Thêm Vào giỏ</button>
												<?php
												}
												?>
												</form>
											</div>
										</div>
									</li>
									<?php
											}
								?>									
 </ul>