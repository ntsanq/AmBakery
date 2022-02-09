<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	Hiện tổng số mail khách hàng hiện có là: 
	<?php 
	require '../../connect.php';
	$sql = "select * from khach_hang";
	$result = mysqli_query($connect, $sql);
	$so_email = mysqli_num_rows($result);
	echo $so_email;
	echo "<br>";
	$index = 0;
	foreach ($result as $row) {
		$index++;
		echo "$index) ";
		echo $row['email'];
		echo "<br>";
	}
	?>
	<br>
	Bạn có thực sự muốn gửi mail cho tất cả khách hàng?
	<a href="">Có</a>
	<a href="">Không</a>

</body>
</html>