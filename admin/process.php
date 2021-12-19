<?php 
	//get values
	$ma = $_POST['ma'];
	$mat_khau = $_POST['mat_khau'];

	//to prevent mysql injection
	$ma = stripcslashes($ma);
	$mat_khau = stripcslashes($mat_khau);
	//connect to server database
	include  'connect.php' ;


	$ma = mysqli_real_escape_string($connect, $ma);
	$mat_khau = mysqli_real_escape_string($connect,$mat_khau);


	$sql = "select * from nhan_vien WHERE ma = '$ma' and mat_khau = '$mat_khau' ";

	//Query the database for user
	$result = mysqli_query($connect, $sql)
		or die("Fail to query database ".mysqli_error());
	$row = mysqli_fetch_array($result);
	if ($row['ma'] == $ma && $row['mat_khau'] == $mat_khau) {
		// echo "Login success! Welcome ".$row['ma'];
		header("Location: dashboard_quanly/index.php");
	}else {
		echo "Failed to login!";
	}
?>
<a href="login.php">Thử đăng nhập lại</a>