<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa thể loại</title>
	<link rel="stylesheet" href="../css/form.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
</head>
<body>
<?php 
		$ma = $_GET['ma'];
		include  '../../connect.php' ;
		$sql = "select * from the_loai where ma = $ma";
		// die($sql);
		$result= mysqli_query($connect, $sql);
		$the_loai = mysqli_fetch_array($result);
?>
<header>
        <div id="header">
            <a href="#" class="header__logo" >
                <span><b>am</b>bakery</span>
            </a>
        </div>
    </header>
	<div class="container">
		<form action="them_theloai_process.php" method="POST">

			<div >
				<h1>Thêm thể loại mới</h1>
				
				<label for="ma">Mã thể loại: </label>
				<input class="input--form" type="text" name="ma" value="<?php echo $the_loai['ma'] ?>">
				<br>
				<label for="ten_the_loai">Tên thể loại: </label>
				<input class="input--form" type="text" name="ten_the_loai"  value="<?php echo $the_loai['ten_the_loai'] ?>">
				<br>
				<input type="submit" id="btn" value="Hoàn tất chỉnh sửa">
			</div>
		</form>
	</div>
</body>
</html>