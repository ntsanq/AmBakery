<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho nhân viên</title>
	<link rel="stylesheet" href="css/form.css">
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
		<form action="them_nhanvien_process.php" method="POST">
			<div class="form__heading">
				<h1>Đăng ký nhân viên mới</h1>
				<p>Điền	 tin vào các ô trống;</p>
				</div>
				<!-- <label for="ma">Mã nhân viên: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten">Tên nhân viên: </label>
				<br>
				<input type="text" name="ten">
				<br>
				<label for="dia_chi">Địa chỉ: </label>
				<br>
				<input type="text" name="dia_chi">
				<br>
				<label for="sdt">Số điện thoại: </label>
				<br>
				<input type="text" name="sdt">
				<br>
				<label for="email">Email: </label>
				<br>
				<input type="text" name="email">
				<br>
				<label for="mat_khau">Password: </label>
				<br>
				<input type="password" name="mat_khau">
				<br>
				<label for="cap_do">Là nhân viên hay là quản lí?  </label>
				<br>
				<input type="radio" name="cap_do" value="0">
				<label for="nhan_vien">Nhân viên </label>
				<input type="radio" name="cap_do" value="1">
				<label for="quan_li">Quản lí </label>
				<br>
				<input type="submit" id="them_nhanvien_btn" value="Đăng ký">
			
		</form>
	</div>
</body>
</html>