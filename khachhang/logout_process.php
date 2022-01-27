<?php 
session_start();
unset($_SESSION['ma_kh']);
header('location: index.php');