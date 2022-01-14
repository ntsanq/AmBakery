<?php 
include  '../../connect.php' ;

		$ma= $_POST['ma'];
		$ten = $_POST['ten'];
		$gioi_tinh = $_POST['gioi_tinh'];
		$email = $_POST['email'];
		$mat_khau= $_POST['mat_khau'];
		// $cap_do = $_POST['cap_do'];
	
		$sql = "update khach_hang set 
		ten = '$ten',
		gioi_tinh = '$gioi_tinh',
		email = '$email',
		mat_khau = '$mat_khau'
		where ma = $ma
		";
		mysqli_query($connect, $sql);
		mysqli_close($connect);
		header("Location: index.php");
