<?php 
session_start();

$ma = $_GET['ma'];

require  '../../connect.php' ;
$sql = "update hoa_don set trang_thai = 1 where ma = '$ma'";
mysqli_query($connect, $sql);

$ten_nv = $_SESSION['ten_nv'];
$sql = "update hoa_don set duyet_boi = '$ten_nv' where ma = '$ma'";
mysqli_query($connect, $sql);
mysqli_close($connect);
header("Location: index.php");