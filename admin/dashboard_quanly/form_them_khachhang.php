<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho khách hàng</title>
</head>
<body>
	<div>
		<form action="them_khachhang_process.php" method="POST">
			<div >
				<h1>Đăng ký khách hàng mới</h1>
				<p>Điền	 tin vào các ô trống;</p>
				
				<!-- <label for="ma">Mã khách hàng: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten">Tên khách hàng: </label>
				<input type="text" name="ten">
				<br>
				<label for="dia_chi">Địa chỉ: </label>
				<input type="text" name="dia_chi">
				<br>
				<label for="sdt">Số điện thoại: </label>
				<input type="text" name="sdt">
				<br>
				<label for="email">Email: </label>
				<input type="text" name="email">
				<br>
				<label for="mat_khau">Password: </label>
				<input type="password" name="mat_khau">
				<br>
				 <input type="submit" id="them_khachhang_btn" value="Đăng ký">
			</div>
		</form>
	</div>
</body>
</html>