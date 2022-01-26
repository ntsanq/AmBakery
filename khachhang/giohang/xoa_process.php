<?php 
	session_start();
	$ma = $_GET['ma'];
	$cart = $_SESSION['cart'];
	unset($_SESSION['cart'][$ma]);
	header("Location: index.php");