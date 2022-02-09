<?php 


require '../admin/connect.php' ;
$sql = "select ma from khach_hang where email = 'sangkh@gmail.com'";
		$result=  mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);
		die($row['ma']);
		mysqli_close($connect);