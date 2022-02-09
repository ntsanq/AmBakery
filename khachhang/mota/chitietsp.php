<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mô tả</title>
</head>
<body>
	<?php 
	$ma = $_GET['ma'];
	include  '../../admin/connect.php'  ;
	$sql = "select * from san_pham where ma = $ma";
	$result = mysqli_query($connect, $sql);
	$san_pham = mysqli_fetch_array($result);
	?>
	<h1>
		<?php echo $san_pham['ten_san_pham'] ?>
	</h1>
	<p>		
		<?php echo nl2br($san_pham['mo_ta']) ?>
	</p>
	<img src="<?php echo $san_pham['anh'] ?>" height="400px" >
</body>
</html>