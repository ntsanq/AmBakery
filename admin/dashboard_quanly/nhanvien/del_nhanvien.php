<?php 
$ma = $_GET['ma'];

require '../../connect.php';

$sql = "delete from	nhan_vien where ma = $ma";		
mysqli_query($ket_noi, $sql);
mysqli_close($ket_noi);

echo "Đã xóa thành công!";