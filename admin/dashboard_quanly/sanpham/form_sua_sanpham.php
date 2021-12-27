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
	?>
	<header>
		<div id="header">
			<a href="#" class="header__logo" >
				<span><b>am</b>bakery</span>
			</a>
		</div>
	</header>
	<div class="container">
		<!-- Đưa mã sản phẩm theo nhưng ẩn -->
		

		<form action="sua_sanpham_process.php" method="POST">
			<input type="hidden" name="ma" value="<?php echo $ma ?>">	
			<div >
				<h1>Sửa thông tin sản phẩm</h1>
				
				<!-- <label for="ma">Mã sản phẩm: </label>
				<input type="text" name="ma">
				<br> -->
				<label for="ten_san_pham">Tên sản phẩm: </label>
				<input class="input--form" type="text" name="ten_san_pham" value="<?php echo $san_pham['ten_san_pham'] ?>">
				<br>
				<label for="mo_ta">Mô tả sản phẩm: </label>
				<input class="input--form" type="text area" name="mo_ta" value="<?php echo $san_pham['mo_ta'] ?>">
				<br>
				<label for="anh">Ảnh: </label>
				<input class="input--form" type="text" name="anh" value="<?php echo $san_pham['anh'] ?>">
				<br>
				<label for="gia">Giá: </label>
				<input class="input--form" type="text" name="gia" value="<?php echo $san_pham['gia'] ?>">
				<br>
				<label for="ma_the_loai">Mã thể loại: </label>
				<input class="input--form" type="text" name="ma_the_loai" value="<?php echo $san_pham['ma_the_loai'] ?>">
				<br>
				<input type="submit" id="btn" value="Hoàn tất chỉnh sửa">
			</div>
		</form>
	</div>
</body>
</html>