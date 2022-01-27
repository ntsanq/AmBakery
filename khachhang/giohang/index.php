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
	require '../connect.php';
	$tong_tien = 0;

	if (isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
		?>
		
		<?php include 'header.php' ?>

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
			<tr class="tong_tien">
				<td colspan="4" >
					Tổng tiền hóa đơn là :
				</td>
				<td colspan="2" >
					<span > <?php  echo $tong_tien?>đ</span>
				</td>
			</tr>
			<tr>
				<td colspan="6" >
					<a href="xoa_all_process.php" class="huy_tat">Hủy tất cả</a>
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<?php include('../dathang/form.php') ?>

	<?php } ?>

	<?php 
	if (empty($_SESSION['cart'])) { 
		include 'header.php';
		?>
		<table>
			<th>Bạn không có đồ trong giỏ hàng</th>
		</table>
	<?php } ?>
	

	
	
	
</body>
</html>