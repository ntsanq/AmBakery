<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho nhân viên</title>
	<link rel="stylesheet" href="../../css/form.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
</head>
<body>
<header>
        <div id="header">
            <a href="#" class="header__logo" >
                <span><b>am</b>bakery</span>
            </a>
        </div>
    </header>
	<div class="container">
		<form action="them_process.php" method="POST">
			<div >
				<h1>Thêm sản phẩm mới</h1>
				
				<!-- <label for="ma">Mã sản phẩm: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten_san_pham">Tên sản phẩm: </label>
				<input class="input--form" type="text" name="ten_san_pham">
				<br>
				<label for="mo_ta">Mô tả sản phẩm: </label>
				<input class="input--form" type="text area" name="mo_ta">
				<br>
				<label for="anh">Ảnh: </label>
				<input class="input--form" type="text" name="anh">
				<br>
				<label for="gia">Giá: </label>
				<input class="input--form" type="text" name="gia">
				<br>
				<label for="ma_the_loai">Mã thể loại: </label>
				<input class="input--form" type="text" name="ma_the_loai">
				<br>
				 <input type="submit" id="btn" value="Thêm">
			</div>
		</form>
	</div>
</body>
</html>