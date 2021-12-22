<?php 
	include  '../../connect.php' ;
	$ma = $_GET['ma'];
	$sql = "delete from the_loai where ma = $ma";
	mysqli_query($connect, $sql);
			// die($sql);
	mysqli_close($connect);
	header("Location: ql_theloai.php");