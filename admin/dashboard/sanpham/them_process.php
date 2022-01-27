<?php 
		
		require  '../../connect.php' ;

		// $ma= $_POST['ma'];
		$ten_san_pham = $_POST['ten_san_pham'];
		$mo_ta = $_POST['mo_ta'];
		$anh = $_POST['anh'];
		$gia= $_POST['gia'];
		$ma_the_loai = $_POST['ma_the_loai'];
	
		$sql = "insert into san_pham (ten_san_pham,mo_ta,anh,gia,ma_the_loai) values ('$ten_san_pham','$mo_ta','$anh','$gia', '$ma_the_loai')";
		mysqli_query($connect, $sql);

		echo "Bạn đã thêm sản phẩm $ten_san_pham thành công!";
		mysqli_close($connect);
		header("Location: index.php");
?>