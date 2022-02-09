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
	<?php 
	require  '../../connect.php' ;
	$sql = "select * from the_loai";
	$result= mysqli_query($connect, $sql);
	?>

	<?php 
	include '../header.php';
	?>
	<a href="../sanpham"></i><span>Quay lại</span></a>
	<div class="container">
		<form action="them_process.php" method="POST">
			<div >
				<h1>Thêm sản phẩm mới</h1>
				
				<!-- <label for="ma">Mã sản phẩm: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ma_the_loai">Thể loại: </label>
				<select class="input--form--select" name="ma_the_loai">
					<?php foreach ($result as $tung_the_loai ) {?>
						<option  value="<?php echo $tung_the_loai['ma'] ?>" ><?php echo $tung_the_loai['ten_the_loai'] ?></option>
					<?php } ?>
				</select>
				<br>
				<label for="ten_san_pham">Tên sản phẩm: </label>
				<input class="input--form" type="text" name="ten_san_pham">
				<br>
				<label for="mo_ta">Mô tả sản phẩm: </label>
				<textarea class="input--form--texarea" name="mo_ta" rows="4" cols="50"></textarea> 
				<br>
				<label for="anh">Ảnh: </label>
				<input class="input--form" type="text" name="anh">
				<br>
				<label for="gia">Giá: </label>
				<input class="input--form" type="text" name="gia">
				<br>
				
				<input type="submit" id="btn" value="Thêm">
			</div>
		</form>
	</div>
</body>
</html>