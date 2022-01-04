<?php 
	include  '../../connect.php' ;
	$ma = $_GET['ma'];
	$sql = "delete from khach_hang where ma = $ma";
	mysqli_query($connect, $sql);
			// die($sql);
	mysqli_close($connect);
	header("Location: index.php");