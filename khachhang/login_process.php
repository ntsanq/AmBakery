<?php 
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];

	$email = stripcslashes($email);
	$mat_khau = stripcslashes($mat_khau);

	require  '../admin/connect.php'  ;

	$email = mysqli_real_escape_string($connect, $email);
	$mat_khau = mysqli_real_escape_string($connect,$mat_khau);

	if (isset($_POST['ghi_nho'])) {
		$ghi_nho = true;
	}else{
		$ghi_nho = false;
	}

	$sql = "select * from khach_hang WHERE email = '$email' and mat_khau = '$mat_khau' ";
	
	$result = mysqli_query($connect, $sql)
		or die("Fail to query database ".mysqli_error());

	$row = mysqli_fetch_array($result); 
		if ($row['email'] == $email && $row['mat_khau'] == $mat_khau) {
			session_start();
			$_SESSION['ma_kh'] = $row['ma'];
			header("Location: index.php");
		}else{
			echo "Failed to log in";
		}
?>
<a href="login.php">Thử đăng nhập lại</a>