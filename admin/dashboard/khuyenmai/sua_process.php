<?php 
require  '../../connect.php' ;

		$ma_cap_do= $_POST['ma_cap_do'];
		$phan_tram = $_POST['phan_tram'];
		$sql = "update giam_gia set 
		phan_tram = '$phan_tram'
		where ma_cap_do = $ma_cap_do
		";
		mysqli_query($connect, $sql);
		mysqli_close($connect);
		header("Location: index.php");
