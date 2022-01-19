<?php 
session_start();
unset($_SESSION['ten_kh']);
header('location: index.php');