<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	<?php include '../thuvien.php'; ?>
</head>
<body>
	<?php  
	session_start();
	$cart = $_SESSION['cart'];

	require '../connect.php';
	$tong_tien = 0;
	?>
	<div width="100%">
		<div width="10%" style="font-size:20px; ">
			<a href="../"><i class="fas fa-arrow-left"></i>
			<span>Go back</span>
			</a>
		</div>
		<div width="90%"><h1 align="center">Giỏ hàng</h1></div>
	</div>
	
	<br>
	<table border="1" width="100%">
		<thead class="thead-dark">
			<tr>
				<th>Ảnh</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Tổng tiền</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cart as $ma => $tung_san_pham) { ?>
				<tr>
					<td>
						<img src="<?php echo $tung_san_pham['anh']?>" height="100px"> 
					</td>
					<td>
						<?php echo $tung_san_pham['ten_san_pham']?>
					</td>
					<td>
						<?php echo $tung_san_pham['gia']?>đ
					</td>
					<td>
						<a href="so_luong_update.php?ma=<?php echo $ma ?>&type=decre" style="font-size: 25px;">-</a>
						<?php echo $tung_san_pham['so_luong']?>
						<a href="so_luong_update.php?ma=<?php echo $ma ?>&type=incre" style="font-size: 25px;">+</a>
					</td>
					<td>
						<?php 
						$tong = $tung_san_pham['gia']*$tung_san_pham['so_luong'];
						echo  $tong;
						$tong_tien += $tong;
						?>đ
					</td>
					<td>
						<a href="xoa_process.php?ma=<?php echo $ma?>" onclick="if(confirm('Bạn xóa món hàng này thật à?')){}else{return false;}">Xóa
						</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<p style="font-size: 20px; margin-top: 10px;">Tổng tiền hóa đơn là : <?php  echo $tong_tien?>đ</p>
	<br>
	<?php include('../dathang/form.php') ?>
</body>
</html>