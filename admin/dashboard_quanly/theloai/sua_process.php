<?php 
		
		include  '../../connect.php' ;

		$ma= $_POST['ma'];
		$ten_the_loai = $_POST['ten_the_loai'];
	
		$sql = "update the_loai set 
		ma = '$ma',
		ten_the_loai = '$ten_the_loai'
		where ma =$ma";
		mysqli_query($connect, $sql);

		mysqli_close($connect);
		header("Location: index.php");
?>