<?php 
if (isset($_SESSION['ma_kh'])) {?>

	<!-- Khách có tài khoản -->
	<h2>ĐẶT HÀNG</h2>
	<form method="post" action="../dathang/checkout_process.php">
		<?php 
		$ma=$_SESSION['ma_kh'];
		$sql = "select * from khach_hang where ma = '$ma'";
		$result=  mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);
		?>
		<input type="hidden" name="ma" value="<?php echo $row['ma']?>">
		Tên người nhận:
		<input type="text" name="ten" value="<?php echo $row['ten']?>"><br>
		Sđt người nhận:
		<input type="text" name="sdt" value="<?php echo $row['sdt']?>"><br>
		Địa chỉ giao hàng:
		<input type="text" name="dia_chi" value="<?php echo $row['dia_chi']?>"><br>
		Ghi chú:
		<textarea name="ghi_chu"></textarea><br>
		<button type="submit">Đặt hàng</button>
	</form>
<?php }else { ?>

	<!-- Khách không có tài khoản -->
	<h2>ĐẶT HÀNG</h2>
	<form method="post" action="../dathang/checkout_process.php">
		Tên người nhận:
		<input type="text" name="ten"><br>
		Sđt người nhận:
		<input type="text" name="sdt" ><br>
		Địa chỉ giao hàng:
		<input type="text" name="dia_chi" ><br>
		Ghi chú:
		<textarea name="ghi_chu"></textarea><br>
		<button type="submit">Đặt hàng</button>
	</form>
	<?php } ?>