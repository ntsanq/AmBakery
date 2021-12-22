<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho nhân viên</title>
</head>
<body>
	<div>
		<form action="them_nhanvien_process.php" method="POST">
			<div >
				<h1>Đăng ký nhân viên mới</h1>
				<p>Điền	 tin vào các ô trống;</p>
				
				<!-- <label for="ma">Mã nhân viên: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten">Tên nhân viên: </label>
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
				<label for="cap_do">Là nhân viên hay là quản lí?  </label>
				<input type="radio" name="cap_do" value="0">
				<label for="nhan_vien">Nhân viên </label>
				<input type="radio" name="cap_do" value="1">
				<label for="quan_li">Quản lí </label>
				<br>
				 <input type="submit" id="them_nhanvien_btn" value="Đăng ký">
			</div>
		</form>
	</div>
</body>
</html>