<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa sản phẩm</title>
	<link rel="stylesheet" href="../../css/form.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
</head>
<body>


	<?php 
	$ma = $_GET['ma'];
	include  '../../connect.php' ;
	$sql = "select * from san_pham where ma = $ma";
	$result= mysqli_query($connect, $sql);
	$san_pham = mysqli_fetch_array($result);

	$sql_the_loai = "select * from the_loai";
	$result_the_loai= mysqli_query($connect, $sql_the_loai);
	?>
	<?php 
	include '../header.php';
	?>
	<div class="container">
		<!-- Đưa mã sản phẩm theo nhưng ẩn -->
		

		<form action="sua_process.php" method="POST">
			<input type="hidden" name="ma" value="<?php echo $ma ?>">	
			<div >
				<h1>Sửa thông tin sản phẩm</h1>
				
				<!-- <label for="ma">Mã sản phẩm: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ma_the_loai">Thể loại: </label>
				<?php
				 $selected = $san_pham['ma_the_loai'];
				?>
				<select class="input--form--select" name="ma_the_loai" >
					<?php foreach ($result_the_loai as $tung_the_loai ) {?>
						<option <?php if ($selected == $tung_the_loai['ma']) {
							echo "selected";
						} ?> value="<?php echo $tung_the_loai['ma'] ?>" >
							<?php echo $tung_the_loai['ten_the_loai'] ?>
						</option>
					<?php } ?>
				</select>
				<br>
				<label for="ten_san_pham">Tên sản phẩm: </label>
				<input class="input--form" type="text" name="ten_san_pham" value="<?php echo $san_pham['ten_san_pham'] ?>">
				<br>
				<label for="mo_ta">Mô tả sản phẩm: </label>
				<textarea class="input--form--texarea" name="mo_ta" rows="4" cols="50"><?php echo $san_pham['mo_ta'] ?></textarea> 
				<br>
				<label for="anh">Ảnh: </label>
				<input class="input--form" type="text" name="anh" value="<?php echo $san_pham['anh'] ?>">
				<br>
				<label for="gia">Giá: </label>
				<input class="input--form" type="text" name="gia" value="<?php echo $san_pham['gia'] ?>">
				<br>
				
				<input type="submit" id="btn" value="Hoàn tất chỉnh sửa">
			</div>
		</form>
	</div>
</body>
</html>