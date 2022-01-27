<div class="main_top">
	<div class="main_top_left">
		<form>
			<input type="search" placeholder="Tìm kiếm..." name="tim_kiem">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<div class="main_top_right">
		<div class="dropdown">
			<button class="dropbtn">
				<?php echo $_SESSION['ten'] ?>
				<i class="fas fa-user-alt"></i>
			</button>
			<div class="dropdown-content">
				<a href="../logout_process.php">Đăng xuất</a>
			</div>
		</div>
	</div>
</div>

