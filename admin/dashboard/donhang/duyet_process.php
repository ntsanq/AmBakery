<?php 
session_start();

$ma = $_GET['ma'];

require  '../../connect.php' ;
$sql = "update hoa_don set trang_thai = 1 where ma = '$ma'";
mysqli_query($connect, $sql);

$ten_nv = $_SESSION['ten_nv'];
$sql = "update hoa_don_chi_tiet set duyet_boi = '$ten_nv' where ma_hoa_don = '$ma'";
mysqli_query($connect, $sql);
mysqli_close($connect);
header("Location: index.php");