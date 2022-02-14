<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mô tả</title>
	<?php include '../thuvien.php'; ?>
	<link rel="stylesheet" type="text/css"  href="../css/login.css">
	<style type="text/css">
		.mota__anh {
			height: 100%;
			width: 500px;
			float: left;
			object-fit: cover;
		}
		.div_mota {
			height:  500px;
			width: 70%;
			margin: 0px auto;
			border: 1px solid black;
			
		}
		.mota__noidung{
			
		}
		.mota__tensp {
			
		}
		.mota__chitiet {
			
		}
	</style>
</head>
<body>

	<?php include '../small_header.php'; ?>
	<div width="10%" style="font-size:20px; ">
		<a href="../"><i class="fas fa-arrow-left"></i>
			<span>Go back</span>
		</a>
	</div>
	<div class="div_mota">
		<?php 
		$ma = $_GET['ma'];
		include  '../../admin/connect.php'  ;
		$sql = "select * from san_pham where ma = $ma";
		$result = mysqli_query($connect, $sql);
		$san_pham = mysqli_fetch_array($result);
		?>
		<div class="mota__anh">
			<img src="<?php echo $san_pham['anh'] ?>" height="400px" class="mota__anh">
		</div>
		<div class="mota__noidung">
			<h1 class="mota__tensp">
				<?php echo $san_pham['ten_san_pham'] ?>
			</h1>
			<p class="mota__chitiet">		
				<?php echo nl2br($san_pham['mo_ta']) ?>
			</p>
			<p>Giá: <?php echo  $san_pham['gia']?>đ</p>
		</div>
		<div class="product__cart">
			<a href="../giohang/add_to_cart.php?ma=<?php echo $san_pham['ma'] ?>">
				<button class="product__cart--btn">Add to cart</button>
			</a>
		</div>
		
	</div>
</body>
</html>