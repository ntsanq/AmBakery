<?php 
		
		include  '../connect.php' ;

		$ma= $_POST['ma'];
		$ten_the_loai = $_POST['ten_the_loai'];
			
		$sql = "insert into the_loai (ma,ten_the_loai) values ('$ma','$ten_the_loai')";
		mysqli_query($connect, $sql);

		echo "Bạn đã thêm thể loại $ma thành công!";
?>
<a href="index.php">Go back<<</a>