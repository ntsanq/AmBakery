<?php 
		session_start();
		include  '../connect.php' ;

		// $ma= $_POST['ma'];
		$ten = $_POST['ten'];
		$gioi_tinh = $_POST['gioi_tinh'];
		$ngay_sinh = $_POST['ngay_sinh'];
		$email = $_POST['email'];
		$mat_khau = $_POST['mat_khau'];


		$sql_check = "select count(*) from khach_hang where email = '$email'";
		$result_check = mysqli_query($connect, $sql_check);
		$number_rows = mysqli_fetch_array($result_check)['count(*)'];
		if ($number_rows == 1) {
			header('location: signup.php?error=Trùng email rồi! Vui lòng nhập lại.');
			exit;
		}

		$sql = "insert into khach_hang (ten, gioi_tinh, ngay_sinh, email, mat_khau, cap_do) values ('$ten','$gioi_tinh','$ngay_sinh','$email','$mat_khau', '1')";
		mysqli_query($connect, $sql);
		// die($sql);
		mysqli_close($connect);

		$_SESSION['ten_kh'] = $ten;
		header('location: ../index.php');
?>