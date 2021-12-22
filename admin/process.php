<?php 
	//get values
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];

	//to prevent mysql injection
	$email = stripcslashes($email);
	$mat_khau = stripcslashes($mat_khau);
	//connect to server database
	include  'connect.php' ;


	$email = mysqli_real_escape_string($connect, $email);
	$mat_khau = mysqli_real_escape_string($connect,$mat_khau);


	$sql = "select * from nhan_vien WHERE email = '$email' and mat_khau = '$mat_khau' ";
	$sql_KH = "select * from khach_hang WHERE email = '$email' and mat_khau = '$mat_khau' ";
	//Query the database for user
	$result = mysqli_query($connect, $sql)
		or die("Fail to query database ".mysqli_error());
	$result_KH = mysqli_query($connect, $sql_KH)
		or die("Fail to query database ".mysqli_error());

	$row = mysqli_fetch_array($result);
	$row_KH = mysqli_fetch_array($result_KH);

	if ($row['email'] == $email && $row['mat_khau'] == $mat_khau) {
		// echo "Login success! Welcome ".$row['email'];
		header("Location: dashboard_quanly/index.php");
	}else if ($row_KH['email'] == $email && $row_KH['mat_khau'] == $mat_khau) {
		header("Location: ../khachhang/index.php");
	}else {
		echo "Failed to login!";
	}
?>
<a href="login.php">Thử đăng nhập lại</a>