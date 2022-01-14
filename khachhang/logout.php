<?php 
session_start();
unset($_SESSION['ten']);
header('location: index.php');