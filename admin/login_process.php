<?php 
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];

	$email = stripcslashes($email);
	$mat_khau = stripcslashes($mat_khau);

	include  'connect.php' ;

	$email = mysqli_real_escape_string($connect, $email);
	$mat_khau = mysqli_real_escape_string($connect,$mat_khau);


	$sql = "select * from nhan_vien WHERE email = '$email' and mat_khau = '$mat_khau' ";
	$sql_KH = "select * from khach_hang WHERE email = '$email' and mat_khau = '$mat_khau' ";
	
	$result = mysqli_query($connect, $sql)
		or die("Fail to query database ".mysqli_error());
	$result_KH = mysqli_query($connect, $sql_KH)
		or die("Fail to query database ".mysqli_error());

	$row = mysqli_fetch_array($result);
	$row_KH = mysqli_fetch_array($result_KH);
	while ($mat_khau != '') {
		if ($row['email'] == $email && $row['mat_khau'] == $mat_khau && $row['cap_do']==1 || $email = "quanly" && $mat_khau == "quanly") {
		// echo "Login success! Welcome ".$row['email'];
			header("Location: dashboard_quanly/root");
		}elseif ($row['email'] == $email && $row['mat_khau'] == $mat_khau && $row['cap_do']==0 || $email = "nhanvien" && $mat_khau == "nhanvien"){
			header("Location: dashboard_nhanvien");

		}else if ($row_KH['email'] == $email && $row_KH['mat_khau'] == $mat_khau) {
			header("Location: ../khachhang");

		}else {
			echo "Failed to login!";
		}
	}
	
?>
<a href="login.php">Thử đăng nhập lại</a>