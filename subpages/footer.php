<footer id="site-footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="footer-block">
						<div class="footer-widget-content clearfix">
							<div id="address-box" class="col-md-5">
								<div id="address-list" class="wow bounceInLeft" data-wow-duration="2s"
									data-wow-delay="0s">
									<h3>NXTHP PC</h3>
									<div class="tit-name tit-hotline-2"><i class="fa fa-phone"></i>Điện thoại</div>
									<div class="tit-contain"><a href='tel:0778005315'>0938772416</a></div>
									<div class="tit-name tit-dia-chi"><i class="fa fa-map-marker"></i>Địa chỉ</div>
									<div class="tit-contain">180 Cao Lỗ, Phường 4, Quận 8, Tp. Hồ Chí Minh</div>
									<div class="tit-name tit-hotline"><i class="fa fa-phone"></i>Đặt hàng</div>
									<div class="tit-contain"><a href='tel:0354634736'>0354 634 736 </a></div>
									<div class="tit-name tit-email"><i class="fa fa-envelope-o"></i>Email</div>
									<div class="tit-contain"><a
											href='mailto:anhdansgvn@gmail.com'>anhdansgvn@gmail.com</a>
									</div>
									<div class="tit-name tit-website"><i class="fa fa-globe fa-1x"></i>Website</div>
								</div>
							</div>
							<div class="menu-box col-md-4 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s">
								<ul>
									<li class="active">
										<a href='./index.php'>
											Trang chủ </a>
									</li>
									<li>
										<a href='./lien-he.php'>
											Liên hệ </a>
									</li>
								</ul>
								<div class="t-mxh">
									<ul>
										<li><a title='facebook' href="https://www.facebook.com/rjslinmagic"><i
													class="fa fa-facebook"></i></a></li>
										<li><a title='youtube' href="https://www.youtube.com/?gl=VN"><i
													class="fa fa-youtube"></i></a></li>
										<li><a title='google +' href="https://www.google.com"><i
													class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="box_dm col-md-3 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0s">
								<h3>Danh mục sản phẩm</h3>
								<?php
								$sql="select * from danhmuc";
								$p=executeResult($sql);
								foreach($p as $dm)
								{
								?>
								<ul>
									<li><a href='./find_by_catergory.php?tendanhmuc=<?php echo $dm['tendanhmuc']?>&madanhmuc=<?php echo $dm['madanhmuc']?>'><?php echo $dm['tendanhmuc']?></a></li>
								</ul>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</footer>