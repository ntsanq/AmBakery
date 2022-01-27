<?php 
$ma = $_GET['ma'];

require  '../../connect.php' ;
$sql = "update hoa_don set trang_thai = 1 where ma = '$ma'";
mysqli_query($connect, $sql);

mysqli_close($connect);
header("Location: index.php");