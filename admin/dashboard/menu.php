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
			<a href="../sanpham">
				<i class="fas fa-bread-slice nav__icon"></i>
				<span>Quản lý sản phẩm</span>
			</a>
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