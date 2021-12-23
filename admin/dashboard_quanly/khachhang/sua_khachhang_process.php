<?php 
include  '../../connect.php' ;

		$ma= $_POST['ma'];
		$ten = $gioi_tinh_POST['ten'];
		$gioi_tinh = $_POST['gioi_tinh'];
		$email = $_POST['email'];
		$mat_khau= $_POST['mat_khau'];
		$cap_do = $_POST['cap_do'];
	
		$sql = "update khach_hang set 
		ten = '$ten',
		gioi_tinh = '$gioi_tinh',
		email = '$email',
		mat_khau = '$mat_khau',
		cap_do = '$cap_do' 
		where ma = $ma
		";
		mysqli_query($connect, $sql);
		// die($sql);
		mysqli_close($connect);
		header("Location: ql_khachhang.php");
