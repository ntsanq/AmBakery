<?php 
	include  '../../connect.php' ;
	$ma= $_POST['ma'];
	$sql = "delete from san_pham where ma = $ma";
	mysqli_query($connect, $sql);
			// die($sql);
	mysqli_close($connect);
	header("Location: ql_sanpham.php");