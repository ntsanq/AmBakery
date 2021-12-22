<?php 
		
		include  '../../connect.php' ;

		// $ma= $_POST['ma'];
		$ten = $_POST['ten'];
		$gioi_tinh = $_POST['gioi_tinh'];
		$ngay_sinh = $_POST['ngay_sinh'];
		$email = $_POST['email'];
		$mat_khau = $_POST['mat_khau'];

		$sql = "insert into khach_hang (ten, gioi_tinh, ngay_sinh, email, mat_khau, cap_do) values ('$ten','$gioi_tinh','$ngay_sinh','$email','$mat_khau', '1')";
		mysqli_query($connect, $sql);
		// die($sql);
		echo "Bạn đã thêm khách hàng $ten thành công!";
		mysqli_close($connect);
?>
<a href="ql_khachhang.php">Go back<<</a>