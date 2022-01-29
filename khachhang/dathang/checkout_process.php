<?php
session_start();

require '../connect.php';

$ma = $_POST['ma'];
$ten = $_POST['ten'];
$sdt = $_POST['sdt'];
$dia_chi = $_POST['dia_chi'];
$ghi_chu = $_POST['ghi_chu'];
$trang_thai = 0; // moi dat
$cart = $_SESSION['cart'];
$tong_tien= 0;

// tổng tiền khách không có tài khoản
if (empty($_SESSION['ma_kh'])) {
	foreach ($cart as $tung_san_pham) {
	$tong_tien += $tung_san_pham['gia']*$tung_san_pham['so_luong'];
	}
}
// tổng tiền khách có tài khoản
else{
	$ma_kh_session = $_SESSION['ma_kh'];
	$sql = "select cap_do from khach_hang where ma = '$ma_kh_session'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
	$row_cap_do = $row['cap_do'];

	$sql = "select phan_tram from giam_gia where ma_cap_do = '$row_cap_do'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
	$row_phan_tram = $row['phan_tram'];

	foreach ($cart as $tung_san_pham) {
	$tong_tien += $tung_san_pham['gia']*$tung_san_pham['so_luong'];
	}
	$tong_tien = $tong_tien - $tong_tien * ($row_phan_tram/100);
	
}


$sql = "insert into hoa_don (ma_khach_hang, ten_nguoi_nhan, sdt_nguoi_nhan, dia_chi_giao_hang, ghi_chu, trang_thai, tong_tien) VALUES ('$ma', '$ten', '$sdt', '$dia_chi', '$ghi_chu', '$trang_thai', '$tong_tien')";
mysqli_query($connect,$sql);

// tìm mã hóa đơn
$sql="select max(ma) from hoa_don where ma_khach_hang = '$ma'"; 
$result =mysqli_query($connect,$sql);
$ma_hoa_don = mysqli_fetch_array($result)['max(ma)'];

foreach ($cart as $ma_san_pham => $tung_san_pham) {
	$so_luong = $tung_san_pham['so_luong'];
	$sql = "insert into hoa_don_chi_tiet (ma_hoa_don,ma_san_pham,so_luong) values ('$ma_hoa_don','$ma_san_pham','$so_luong')";
	mysqli_query($connect,$sql);
}

mysqli_close($connect);
unset($_SESSION['cart']);
header("Location: ../index.php");
