<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa thông tin nhân viên</title>
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
	<?php 
		$ma = $_GET['ma'];
		include  '../../connect.php' ;
		$sql = "select * from nhan_vien where ma = $ma";
		$result= mysqli_query($connect, $sql);
		$nhan_vien = mysqli_fetch_array($result);
	?>
	<div class="container">
		<form action="sua_nhanvien_process.php" method="POST">
			<input type="hidden" name="ma" value="<?php echo $ma ?>">	
			<div class="form__heading">
				<h1>Sửa thông tin cho nhân viên</h1>
			</div>
				<!-- <label for="ma">Mã nhân viên: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten">Tên nhân viên: </label>
				<input class="input--form" type="text" name="ten" value="<?php echo	$nhan_vien['ten'] ?>">
				<br>
				<label for="dia_chi">Địa chỉ: </label>
				<input class="input--form" type="text" name="dia_chi" value="<?php echo	$nhan_vien['dia_chi'] ?>">
				<br>
				<label for="sdt">Số điện thoại: </label>
				<input class="input--form" type="text" name="sdt" value="<?php echo	$nhan_vien['sdt'] ?>">
				<br>
				<label for="email">Email: </label>
				<input class="input--form" type="text" name="email" value="<?php echo	$nhan_vien['email'] ?>">
				<br>
				<label for="mat_khau">Password: </label>
				<input class="input--form" type="password" name="mat_khau" value="<?php echo	$nhan_vien['mat_khau'] ?>">
				<br>
				<label for="cap_do">Là nhân viên hay là quản lí?  </label>
				<input type="radio" name="cap_do" value="0">
				<label class="label--radio"for="nhan_vien">Nhân viên </label>
				<input type="radio" name="cap_do" value="1">
				<label class="label--radio" for="quan_li">Quản lí </label>
				<br>
				<input  type="submit" id="btn" value="Hoàn tất chỉnh sửa">

			</form>
		</div>
	</body>
	</html>