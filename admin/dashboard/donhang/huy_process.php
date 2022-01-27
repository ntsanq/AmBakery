<?php 
$ma = $_GET['ma'];

require  '../../connect.php' ;
$sql = "delete from hoa_don where ma = '$ma'";
mysqli_query($connect, $sql);

mysqli_close($connect);
header("Location: index.php");