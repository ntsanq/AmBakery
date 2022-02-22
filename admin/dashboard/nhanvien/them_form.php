<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho nhân viên</title>
	<link rel="stylesheet" href="../../css/form.css">
	<?php include '../thuvien.php'; ?>
</head>
<body>
	<?php 
	include '../header.php';
	?>
	<?php include '../quaylai_btn.php' ?>
	<div class="container">
		<form action="them_process.php" method="POST">
			<div class="form__heading">
				<h1>Đăng ký nhân viên mới</h1>
			</div>
				<!-- <label for="ma">Mã nhân viên: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten">Tên nhân viên: </label>
				<input class="input--form" type="text" name="ten">
				<br>
				<label for="dia_chi">Địa chỉ: </label>
				<input class="input--form" type="text" name="dia_chi">
				<br>
				<label for="sdt">Số điện thoại: </label>
				<input class="input--form" type="text" name="sdt">
				<br>
				<label for="email">Email: </label>
				<input class="input--form" type="text" name="email">
				<br>
				<label for="mat_khau">Password: </label>
				<input class="input--form" type="password" name="mat_khau">
				<br>
				<label for="cap_do">Chức vụ: </label>
				<select class="input--form" name="cap_do">
					<option value="1">Quản lý</option>
					<option value="0">Nhân viên</option>
				</select>
				<br>
				<input  type="submit" id="btn" value="Đăng ký">
				
			</form>
		</div>
	</body>
	</html>