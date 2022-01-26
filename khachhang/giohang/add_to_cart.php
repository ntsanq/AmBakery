<?php 

session_start();
// unset($_SESSION['cart']);
$ma = $_GET['ma'];


// TH1: chưa có gì
if (empty($_SESSION['cart'][$ma])) {
	require '../connect.php';
	$sql= "select * from san_pham where ma = '$ma'";
	$result= mysqli_query($connect, $sql);
	$tung_san_pham = mysqli_fetch_array($result);

	$_SESSION['cart'][$ma]['ten_san_pham'] = $tung_san_pham['ten_san_pham'];
	$_SESSION['cart'][$ma]['anh'] = $tung_san_pham['anh'];
	$_SESSION['cart'][$ma]['gia'] = $tung_san_pham['gia'];
	$_SESSION['cart'][$ma]['so_luong'] = 1;
}

// TH2: có hàng
else{
	$_SESSION['cart'][$ma]['so_luong']++;
}

// echo json_encode($_SESSION['cart']);
// header("Location: index.php");

echo sizeof($_SESSION['cart']);