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

	$sql_KH = "select * from khach_hang WHERE email = '$email' and mat_khau = '$mat_khau' ";
	
	$result_KH = mysqli_query($connect, $sql_KH)
		or die("Fail to query database ".mysqli_error());

	$row_KH = mysqli_fetch_array($result_KH);
		if ($row_KH['email'] == $email && $row_KH['mat_khau'] == $mat_khau) {
			// $_SESSION['ma'] = row_KH('ma');
			header("Location: trangkh.php");
		}else{
			echo "Failed to log in";
		}
?>
<a href="index.php">Thử đăng nhập lại</a>