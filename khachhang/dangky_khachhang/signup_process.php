<?php 
		session_start();
		require  '../connect.php' ;

		$ten = $_POST['ten'];
		$gioi_tinh = $_POST['gioi_tinh'];
		$ngay_sinh = $_POST['ngay_sinh'];
		$email = $_POST['email'];
		$sdt = $_POST['sdt'];
		$dia_chi = $_POST['dia_chi'];
		$mat_khau = $_POST['mat_khau'];


		$sql_check = "select count(*) from khach_hang where email = '$email'";
		$result_check = mysqli_query($connect, $sql_check);
		$number_rows = mysqli_fetch_array($result_check)['count(*)'];
		if ($number_rows == 1) {
			header('location: signup.php?error=Trùng email rồi! Vui lòng nhập lại.');
			exit;
		}

		$sql = "insert into khach_hang (ten, gioi_tinh, ngay_sinh, email, sdt, dia_chi, mat_khau, cap_do) values ('$ten','$gioi_tinh','$ngay_sinh','$email', '$sdt', '$dia_chi','$mat_khau', '1')";
		mysqli_query($connect, $sql);
		// die($sql);



		$sql = "select ma from khach_hang where email = '$email'";
		$result=  mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);
		$_SESSION['ma_kh']= $row['ma'];
		mysqli_close($connect);


		header('location: ../index.php');
?>