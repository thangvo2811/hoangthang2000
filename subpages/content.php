<?php
$sql = "select * from danhmuc";
$dm=executeResult($sql);
?>
<div class="navbar-content">
	<div class="container">
	<div class="navbar navbar-d">
	<ul>

			<?php
			if(!isset($_SESSION['taikhoan']))
			{
				foreach($dm as $name)
					{
						?>
							
							<li><a href='./find_by_catergory.php?tendanhmuc=<?php echo $name['tendanhmuc']?>&madanhmuc=<?php echo $name['madanhmuc']?>'><?php echo $name['tendanhmuc'] ?></a></li>
						<?php
					}
				?>
			<?php
			}
			?>
		
			<?php
			if(isset($_SESSION['taikhoan']))
			{
				$sm=$_SESSION['taikhoan'];
				$sql="select * from nhanvien where taikhoan='$sm'";
				$nv=executeSingleResult($sql);
				if($nv['phanquyen']=='04')
					{
					?>	
						<li><a href="../banhang/cacdon-chogiao.php">Các đơn hàng</a></li>
						<li><a href="../banhang/cac-don-hang-da-giao.php">đơn đã giao trong ngày</a></li>
					<?php
					}
				if($nv['phanquyen']=='01'||$nv['phanquyen']=='02')
				{
					header("location:./admin/index.php");
				}
				?>
			<?php
			}
			?>
					<li><a href='./lien-he.php'>Liên hệ</a></li>
			<?php
			if(isset($_SESSION['email']))
			{
			?>
			<li class="dropdown open">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="true">
					<img alt="" src="images/2.png">
				    <span class="email"><?php echo $_SESSION['email']?></span>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu extended logout">
				<li><a href="./cart.php"><i class=" fa fa-suitcase"></i>GiỏHàng</a></li>
				<li><a href="./donhang.php"><i class="fa fa-suitcase"></i>Đơn Hàng</a></li>
					<li><a href="info.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
					<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
					<li><a href="logoust.php"><i class="fa fa-key"></i> Log Out</a></li>
				</ul>
			</li> 
			<?php
			}
			if (isset($_SESSION['taikhoan']))
			{
	
				{
				?>
					<li class="dropdown open">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="true">
						<img alt="" src="images/2.png">
						<span class="email"><?php echo $_SESSION['taikhoan']?></span>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu extended logout">
					<li><a href="./cart.php"><i class=" fa fa-suitcase"></i>GiỏHàng</a></li>
					<li><a href="./donhang.php"><i class="fa fa-suitcase"></i>Đơn Hàng</a></li>
						<li><a href="info.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
						<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
						<li><a href="logoust.php"><i class="fa fa-key"></i> Log Out</a></li>
					</ul>
					</li> 
				<?php
				}
				?>
					
			<?php
			}
			if (!isset($_SESSION['email'])&&!isset($_SESSION['taikhoan']))
			{	
			?>
					<li><a href='./dangnhap.php'>Đăng nhập</a></li>
					<li><a href='./dangky.php'>Đăng ký</a></li>
			<?php
			}
			?>
		
</ul>
</div>
	</div>
</div>