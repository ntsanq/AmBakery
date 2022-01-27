<?php 
require  '../../connect.php' ;

		$ma= $_POST['ma'];
		$ten_san_pham = $_POST['ten_san_pham'];
		$mo_ta = $_POST['mo_ta'];
		$anh = $_POST['anh'];
		$gia= $_POST['gia'];
		$ma_the_loai = $_POST['ma_the_loai'];
	
		$sql = "update san_pham set 
		ten_san_pham = '$ten_san_pham',
		mo_ta = '$mo_ta',
		anh = '$anh',
		gia = '$gia',
		ma_the_loai = '$ma_the_loai' 
		where ma = $ma
		";
		mysqli_query($connect, $sql);
		// die($sql);
		mysqli_close($connect);
		header("Location: index.php");
