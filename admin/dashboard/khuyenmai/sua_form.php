<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa khuyến mãi</title>
	<link rel="stylesheet" href="../../css/form.css">
	<?php include '../thuvien.php'; ?>
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
	  <a href="../khuyenmai" class="a_back"><i class="fas fa-arrow-left"></i><span>Quay lại</span></a>
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