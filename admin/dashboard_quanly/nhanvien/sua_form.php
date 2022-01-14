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
	<?php 
		include '../header.php';
	 ?>
	<?php 
		$ma = $_GET['ma'];
		include  '../../connect.php' ;
		$sql = "select * from nhan_vien where ma = $ma";
		$result= mysqli_query($connect, $sql);
		$nhan_vien = mysqli_fetch_array($result);
	?>
	<div class="container">
		<form action="sua_process.php" method="POST">
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
				<?php
				 $selected = $nhan_vien['cap_do'];
				?>
				<select class="input--form" name="cap_do">
					<option value="1" <?php if ($selected == 1) {echo "selected";} ?>>
						Quản lý
					</option>
					<option value="0" <?php if ($selected == 0) {echo "selected";} ?>>
						Nhân viên
					</option>
				</select>
				<br>
				<input  type="submit" id="btn" value="Hoàn tất chỉnh sửa">

			</form>
		</div>
	</body>
	</html>