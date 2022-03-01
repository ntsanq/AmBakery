<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm thể loại</title>
	<link rel="stylesheet" href="../../css/form.css">
	<?php include '../thuvien.php'; ?>
</head>
<body>
	<?php 
	include '../header.php';
	?>
	 <a href="../theloai" class="a_back"><i class="fas fa-arrow-left"></i><span>Quay lại</span></a>
	<div class="container">
		<form action="them_process.php" method="POST">
			<div >
				<h1>Thêm thể loại mới</h1>
				<!-- 
				<label for="ma">Mã thể loại: </label>
				<input class="input--form" type="text" name="ma">
				<br> -->
				<label for="ten_the_loai">Tên thể loại: </label>
				<input class="input--form" type="text" name="ten_the_loai">
				<br>
				<input type="submit" id="btn" value="Thêm">
			</div>
		</form>
	</div>
</body>
</html>