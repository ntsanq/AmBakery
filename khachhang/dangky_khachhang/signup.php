<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký cho khách hàng</title>
	<link rel="stylesheet" href="../css/form.css">
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
		<?php 
		if (isset($_GET['error'])) {
			echo $_GET['error'];
		}
		 ?>
		<form action="signup_process.php" method="POST">
			<div >
				<h1>Đăng ký khách hàng mới</h1>
				
				<!-- <label for="ma">Mã khách hàng: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten">Tên khách hàng: </label>
				<input class="input--form" type="text" name="ten">
				<br>
				<label  for="gioi_tinh">Giới tính: </label>
				<input  type="radio" name="gioi_tinh" value="nam">
				<label class="label--radio" for="nam">Nam </label>
				<input  type="radio" name="gioi_tinh" value="nu">
				<label class="label--radio" for="nu">Nữ </label>

				<br>
				<label for="ngay_sinh">Ngày sinh: </label>
				<input class="input--form" type="date" name="ngay_sinh">
				<br>
				<label for="email">Email: </label>
				<input class="input--form" type="text" name="email">
				<br>
				<label for="mat_khau">Mật khẩu	: </label>
				<input class="input--form" type="password" name="mat_khau">
				<br>
				 <input type="submit" id="btn" value="Đăng ký">
			</div>
		</form>
	</div>
</body>
</html>