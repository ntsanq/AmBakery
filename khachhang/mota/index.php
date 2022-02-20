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
			margin-right: 20px;
		}
		.div_mota {
			height:  500px;
			width: 70%;
			margin: 0px auto;
			box-shadow: 5px 10px 28px #888888;

		}
		.mota__noidung{

		}
		.mota__tensp {

		}
		.mota__chitiet {

		}
		.product__cart--btn{
			font-family: inherit;
			font-weight: 500;
            position: absolute;
            right: 210px;
            bottom: 75px;
			border: none;
			background-color: transparent;
			border-bottom: 2px solid #fe8777;
            font-size: 23px;
            margin: 20px ;
            
		}
		.product__cart--btn:hover{
			cursor: pointer;
			color:  #fe8777 ;
			transition: all .3s;
		}
	</style>
</head>
<body>

	<!-- <?php include '../small_header.php'; ?> -->

	<div width="10%" style="font-size:20px; margin-left: 10px;">
		<a href="../"><i class="fas fa-arrow-left"></i>
			<span>Quay lại</span>
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