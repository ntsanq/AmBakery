<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<?php include '../thuvien.php'; ?>
</head>
<body>

	<div width="100%">
		<div width="10%" style="font-size:20px; ">
			<a href="../"><i class="fas fa-arrow-left"></i>
				<span>Quay lại</span>
			</a>
		</div>
		<div width="90%"><h1 align="center" style=" font-weight: 600;">Thông tin cá nhân</h1></div>
	</div>
	<br>
	
	<!-- --------- -->
	<?php 
	$ma_kh = $_SESSION['ma_kh'];
	include  '../../admin/connect.php' ;
	$sql = "select * from khach_hang where ma = $ma_kh";
	$result= mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	?>

	<h1><?php echo $row['ten'] ?></h1>
	<br>
	Giới tính: <?php if ($row['gioi_tinh'] == 0) {
		echo "Nữ";
	}else{
		echo "Nam";
	} ?>
	<br>
	Ngày sinh:<?php echo $row['ngay_sinh'] ?>
	<br>
	Email:<?php echo $row['email'] ?>
	<br>
	Mật khẩu:<?php echo $row['mat_khau'] ?>
</body>
</html>