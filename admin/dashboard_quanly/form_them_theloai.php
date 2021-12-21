<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho nhân viên</title>
</head>
<body>
	<div>
		<form action="them_theloai_process.php" method="POST">
			<div >
				<h1>Thêm thể loại mới</h1>
				<p>Điền thông tin vào các ô trống;</p>
				
				<label for="ma">Mã thể loại: </label>
				<input type="text" name="ma">
				<br>
				<label for="ten_the_loai">Tên thể loại: </label>
				<input type="text" name="ten_the_loai">
				<br>
				 <input type="submit" id="btn" value="Thêm">
			</div>
		</form>
	</div>
</body>
</html>