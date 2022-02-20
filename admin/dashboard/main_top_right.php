<div class="main_top_right">
	<div class="dropdown">
		<button class="dropbtn">
			<?php 
			$ma=$_SESSION['ma'];
			require '../../connect.php';
			$sql = "select ten from nhan_vien where ma = '$ma'";
			$result=  mysqli_query($connect, $sql);
			$row = mysqli_fetch_array($result);
			echo $row['ten'];
			?>
			<i class="fas fa-user-alt"></i>
		</button>
		<div class="dropdown-content">
			<a href="../logout_process.php">Đăng xuất</a>
		</div>
	</div>
</div>

