<?php
session_start();
if (empty($_SESSION['cap_do'])) {
	header("Location: ../../index.php")
}