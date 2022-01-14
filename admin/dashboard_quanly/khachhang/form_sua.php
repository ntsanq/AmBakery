<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa thông tin khách hàng</title>
	<link rel="stylesheet" href="../../css/form.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
</head>
<body>
	<?php 
		$ma = $_GET['ma'];
		include  '../../connect.php' ;
		$sql = "select * from khach_hang where ma = $ma";
		$result= mysqli_query($connect, $sql);
		$khach_hang = mysqli_fetch_array($result);
	?>
	<?php 
		include '../header.php';
	 ?>
	<div class="container">
		<form action="sua_process.php" method="POST">
			<input type="hidden" name="ma" value="<?php echo $ma ?>">
			<div>
				<h1>Sửa thông tin khách hàng</h1>
				
				<!-- <label for="ma">Mã khách hàng: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten">Tên khách hàng: </label>
				<input class="input--form" type="text" name="ten" value="<?php echo $khach_hang['ten'] ?>">
				<br>
				<?php 
				$checked = $khach_hang['gioi_tinh'];
				?>
				<label  for="gioi_tinh">Giới tính: </label>
				<input  type="radio" name="gioi_tinh" value="1" <?php if ($checked == '1') {echo "checked";} ?>>
				<label class="label--radio" for="nam">Nam </label>
				<input  type="radio" name="gioi_tinh" value="0" <?php if ($checked == '0') {echo "checked";} ?>>
				<label class="label--radio" for="nu">Nữ </label>

				<br>
				<label for="ngay_sinh">Ngày sinh: </label>
				<input class="input--form" type="date" name="ngay_sinh" value="<?php echo $khach_hang['ngay_sinh'] ?>">
				<br>
				<label for="email">Email: </label>
				<input class="input--form" type="text" name="email" value="<?php echo $khach_hang['email'] ?>">
				<br>
				<label for="mat_khau">Mật khẩu	: </label>
				<input class="input--form" type="password" name="mat_khau" value="<?php echo $khach_hang['mat_khau'] ?>">
				<br>
				 <input type="submit" id="btn" value="Hoàn tất chỉnh sửa">
			</div>
		</form>
	</div>
</body>
</html>