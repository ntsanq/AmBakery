<?php 
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];
	$email = stripcslashes($email);
	$mat_khau = stripcslashes($mat_khau);

	include  'connect.php' ;

	$email = mysqli_real_escape_string($connect, $email);
	$mat_khau = mysqli_real_escape_string($connect,$mat_khau);

	if (isset($_POST['ghi_nho'])) {
		$ghi_nho = true;
	}else{
		$ghi_nho = false;
	}

	$sql = "select * from nhan_vien WHERE email = '$email' and mat_khau = '$mat_khau' ";

	$result = mysqli_query($connect, $sql) or die("Fail to query database " . mysqli_connect_error() );
	if ($result->num_rows > 0) {
		session_start();
		$row = mysqli_fetch_array($result);
		// $_SESSION['ma'] = $_row['ma'];
		$_SESSION['ten'] = $row['ten'];
		// $_SESSION['cap_do'] = $_row['cap_do'];
		if ($row['cap_do'] == 1 ) {
		echo "Login success! Welcome ".$row['email'];
			header("Location: dashboard_quanly/root");
			if ($ghi_nho == true) {
				setcookie('ghi_nho', $row['ma'], time()+60*60*24*30);
			}

		}else if($row['cap_do'] == 0) {
			header("Location: dashboard_nhanvien");
		}
	} else {
		header('Location: index.php?error=Vui lòng đăng nhập lại!');
	}
	$connect ->close();
	?>