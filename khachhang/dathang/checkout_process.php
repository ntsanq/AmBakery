<?php
session_start();

include '../connect.php';

$ma_kh = $_POST['ma_kh'];
$thoi_gian_dat = $_POST['thoi_gian_dat'];
$ten_kh = $_POST['ten_kh'];
$sdt = $_POST['sdt'];
$dia_chi = $_POST['dia_chi'];
$ghi_chu = $_POST['ghi_chu'];
$trang_thai = 0; // moi dat
$cart = $_SESSION['cart'];
$tong_tien= 0;
foreach ($cart as $tung_san_pham) {
	$tong_tien += $tung_san_pham['gia']*$tung_san_pham['so_luong'];
}

$sql = "insert into hoa_don (ma_khach_hang, ten_nguoi_nhan, sdt_nguoi_nhan, dia_chi_giao_hang, ghi_chu, trang_thai, tong_tien) VALUES ('$ma_kh', '$ten_kh', '$sdt', '$dia_chi', '$ghi_chu', '$trang_thai', '$tong_tien')";
mysqli_query($connect,$sql);

$sql="select max(ma) from hoa_don where ma_khach_hang = '$ma_kh'";
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
