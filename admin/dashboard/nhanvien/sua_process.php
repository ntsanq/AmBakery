<?php 
		
		require  '../../connect.php' ;
		$ma = $_POST['ma'];
		$ten = $_POST['ten'];
		$dia_chi = $_POST['dia_chi'];
		$sdt= $_POST['sdt'];
		$email = $_POST['email'];
		$mat_khau= $_POST['mat_khau'];
		$cap_do = $_POST['cap_do'];

		$sql = "update nhan_vien set 
		ten = '$ten',
		dia_chi = '$dia_chi',
		sdt = '$sdt',
		email = '$email',
		mat_khau = '$mat_khau',
		cap_do = '$cap_do' 
		where ma =$ma
		";
		// die($sql);
		mysqli_query($connect, $sql);

		mysqli_close($connect);
		header("Location: index.php");
?>