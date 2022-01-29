<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa khuyến mãi</title>
	<link rel="stylesheet" href="../../css/form.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
</head>
<body>
	<?php 
		$ma_cap_do = $_GET['ma_cap_do'];
		require  '../../connect.php' ;
		$sql = "select * from giam_gia where ma_cap_do = $ma_cap_do";
		$result= mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);
	?>
	<?php 
		include '../header.php';
	 ?>
	<div class="container">
		<form action="sua_process.php" method="POST">
			<input type="hidden" name="ma_cap_do" value="<?php echo $row['ma_cap_do'] ?>">
			<div>
				<h1><?php echo $row['ghi_chu'] ?></h1>

				<label for="phan_tram">Phần trăm: </label>
				<input class="input--form" type="text" name="phan_tram" value="<?php echo $row['phan_tram'] ?>">
				<br>
				 <input type="submit" id="btn" value="Hoàn tất chỉnh sửa">
			</div>
		</form>
	</div>
</body>
</html>