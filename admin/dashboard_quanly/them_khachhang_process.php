<?php 
		
		include  '../connect.php' ;

		// $ma= $_POST['ma'];
		$ten = $_POST['ten'];
		$dia_chi = $_POST['dia_chi'];
		$sdt = $_POST['sdt'];
		$email = $_POST['email'];
		$mat_khau = $_POST['mat_khau'];

		$sql = "insert into the_loai (ten,dia_chi,sdt,email,mat_khau,cap_do) values ('$ten','$dia_chi','$sdt','email','mat_khau', '1')";
		mysqli_query($connect, $sql);

		echo "Bạn đã thêm khách hàng $ten thành công!";
?>
<a href="index.php">Go back<<</a>