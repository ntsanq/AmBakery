<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thông tin cá nhân</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<?php include '../thuvien.php'; ?>
	<style type="text/css">
		
	</style>
</head>
<body>
	<?php 
	// require '../../admin/connect.php';
	// include '../small_header.php';
	?>
	<div width="100%">
		<div width="10%" style="font-size:20px; ">
			<?php include '../quaylai_btn.php'; ?>
		</div>
		<div width="90%"><h1 align="center" style=" font-weight: 600;">Thông tin cá nhân</h1></div>
	</div>
	<br>
	
	<!-- --------- -->
	
	<div class="container">
		<?php 
		$ma_kh = $_SESSION['ma_kh'];
		include  '../../admin/connect.php' ;
		$sql = "select * from khach_hang where ma = $ma_kh";
		$result= mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);
		?>
		<form action="sua_process.php" method="POST">
			<input type="hidden" name="ma" value="<?php echo $row['ma'] ?>">
			<div>
				
				<!-- <label for="ma">Mã khách hàng: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten" style="padding-top: 0 ;">Họ tên: </label>
				<input disabled="disabled" class="input--form" type="text" name="ten" value="<?php echo $row['ten'] ?> ">
				<br>
				<?php 
				$checked = $row['gioi_tinh'];
				?>
				<label  for="gioi_tinh">Giới tính: </label>
				<input  type="radio" name="gioi_tinh" value="1" <?php if ($checked == '1') {echo "checked";} ?>>
				<label class="label--radio" for="nam">Nam </label>
				<input  type="radio" name="gioi_tinh" value="0" <?php if ($checked == '0') {echo "checked";} ?>>
				<label class="label--radio" for="nu">Nữ </label>

				<br>
				<label for="ngay_sinh">Ngày sinh: </label>
				<input class="input--form" type="date" name="ngay_sinh" value="<?php echo $row['ngay_sinh'] ?>">
				<br>
				<label for="email">Email: </label>
				<input class="input--form" type="text" name="email" value="<?php echo $row['email'] ?>">
				<br>
				<label for="mat_khau">Mật khẩu	: </label>
				<input class="input--form" type="password" name="mat_khau" value="<?php echo $row['mat_khau'] ?>">
				<br>
				 <input type="submit" id="btn" value="Lưu thay đổi">
			</div>
		</form>
	</div>
</body>
</html>