<?php
session_start();
$ma = $_GET['ma'];
$type= $_GET['type'];

if($type=='decre'){
	if ($_SESSION['cart'][$ma]['so_luong'] > 1) {
	$_SESSION['cart'][$ma]['so_luong']--;
	}else{
		unset($_SESSION['cart'][$ma]);
	}
}
if($type=='incre'){
	$_SESSION['cart'][$ma]['so_luong']++;
}

header("Location: index.php");