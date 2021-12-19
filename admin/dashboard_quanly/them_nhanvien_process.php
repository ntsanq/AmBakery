<?php 
		
		include  '../connect.php' ;

		$mat_khau= $_POST['mat_khau'];
		$ma = $_POST['ma'];
		$ten = $_POST['ten'];
		$dia_chi = $_POST['dia_chi'];
		$sdt= $_POST['sdt'];
		$email = $_POST['email'];
	
		$sql = "insert into nhan_vien (ma,ten,dia_chi,sdt,email,mat_khau) values ('$ma','$ten','$dia_chi','$sdt','$email', '$mat_khau')";
		mysqli_query($connect, $sql);

		echo "Bạn đã đăng ký thành công!";
?>
<a href="index.php">Go back<<</a>