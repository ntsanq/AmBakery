<?php session_start(); 
if (!isset($_SESSION['cap_do'])) {
	header("Location: ../../index.php");
}
?>