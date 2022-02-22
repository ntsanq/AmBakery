<?php 
session_start();
require  '../../connect.php' ;
$ma = $_GET['ma'];


if ($ma == $_SESSION['ma_nv']) {
	echo "Bạn không thể tự xóa chính mình!";
}else{
	$sql = "delete from nhan_vien where ma = $ma";
	mysqli_query($connect, $sql);
					// die($sql);
	mysqli_close($connect);
	header("Location: index.php");
	echo 'hi';
}
