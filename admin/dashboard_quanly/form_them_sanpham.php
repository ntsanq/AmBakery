<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho nhân viên</title>
</head>
<body>
	<div>
		<form action="them_sanpham_process.php" method="POST">
			<div >
				<h1>Thêm sản phẩm mới</h1>
				<p>Điền thông tin vào các ô trống;</p>
				
				<!-- <label for="ma">Mã sản phẩm: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten_san_pham">Tên sản phẩm: </label>
				<input type="text" name="ten_san_pham">
				<br>
				<label for="mo_ta">Mô tả sản phẩm: </label>
				<input type="text area" name="mo_ta">
				<br>
				<label for="anh">Ảnh: </label>
				<input type="text" name="anh">
				<br>
				<label for="gia">Giá: </label>
				<input type="text" name="gia">
				<br>
				<label for="ma_the_loai">Mã thể loại: </label>
				<input type="text" name="ma_the_loai">
				<br>
				 <input type="submit" id="btn" value="Thêm">
			</div>
		</form>
	</div>
</body>
</html>