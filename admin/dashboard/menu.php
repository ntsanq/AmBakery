<div class="sidebar">
	<ul class="nav__list">
		<li class="nav__list--item">
			<a href="../root">
				<i class="fas fa-home nav__icon"></i>
				<span>Trang chủ</span>
			</a>
		</li>
		<?php 
		if ($_SESSION['cap_do'] == 1) {?>
			<li class="nav__list--item">
				<a href="../nhanvien">
					<i class="fas fa-male nav__icon"></i>
					<span>Quản lý nhân viên</span>
				</a>
			</li>
		<?php } ?>
		<li class="nav__list--item">
			<div class="dropdown">
				<button class="dropbtn" onclick="location.href='../sanpham'">
					<i class="fas fa-bread-slice nav__icon"></i>
					<span>Quản lý sản phẩm</span>
				</button>
				<div class="dropdown-content">
					<?php 
					require '../../connect.php';
					$sql = "select * from the_loai";
					$result = mysqli_query($connect, $sql);
					foreach ($result as $row) {
						$ten_the_loai = $row['ten_the_loai'];
						$sql= "select * from the_loai where ten_the_loai = '$ten_the_loai'";
						$result = mysqli_query($connect,$sql);
						$ma_the_loai = mysqli_fetch_array($result);
						$lay_ma = $ma_the_loai['ma'];
						?>
						<a href="../sanpham/phanloai.php?ma=<?php echo $lay_ma ?>"><?php echo $row['ten_the_loai'] ?></a>
					<?php } ?>	
				</div>
			</div>
		</li>
		<li class="nav__list--item">
			<a href="../donhang">
				<i class="fas fa-shopping-bag nav__icon"></i>
				<span>Quản lý đơn hàng</span>
			</a>
		</li>
		<?php 
		if ($_SESSION['cap_do'] == 1) {?>
			<li class="nav__list--item">
				<a href="../theloai">
					<i class="fas fa-tasks nav__icon"></i>
					<span>Danh mục thể loại</span>
				</a>
			</li>
		<?php } ?>
		<li class="nav__list--item">
			<a href="../khachhang">
				<i class="fas fa-users nav__icon"></i>
				<span>Khách hàng</span>
			</a>
		</li>
		<?php 
		if ($_SESSION['cap_do'] == 1) {?>
			<li class="nav__list--item">
				<a href="../khuyenmai">
					<i class="fas fa-percent"></i>
					<span>Khuyến mãi</span>
				</a>
			</li>
		<?php } ?>
		<?php 
		if ($_SESSION['cap_do'] == 1) {?>
			<li class="nav__list--item">
				<a href="../mail">
					<i class="far fa-paper-plane"></i>
					<span>Gửi mail quảng cáo</span>
				</a>
			</li>
		<?php } ?>
	</ul>
</div>