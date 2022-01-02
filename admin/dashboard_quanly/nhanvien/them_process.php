<?php 
		
		include  '../../connect.php' ;

		$ten = $_POST['ten'];
		$dia_chi = $_POST['dia_chi'];
		$sdt= $_POST['sdt'];
		$email = $_POST['email'];
		$mat_khau= $_POST['mat_khau'];
		$cap_do = $_POST['cap_do'];

		$sql = "insert into nhan_vien (ten,dia_chi,sdt,email,mat_khau,cap_do) values ('$ten','$dia_chi','$sdt','$email', '$mat_khau','$cap_do')";
		mysqli_query($connect, $sql);

		echo "Bạn đã đăng ký cho nhân viên $ten thành công!";
		mysqli_close($connect);
?>
<a href="index.php">Go back<<</a>