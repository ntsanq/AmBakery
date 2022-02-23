<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giỏ hàng</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<?php include '../thuvien.php'; ?>
</head>
<body>


	<div width="100%">
		<?php include '../quaylai_btn.php'; ?>
		<div width="90%"><h1 align="center" style=" font-weight: 600;">Giỏ hàng</h1></div>
	</div>
	<br>
	<?php  
	session_start();
	require '../../admin/connect.php' ;
	

	if (empty($_SESSION['cart'])) { 
		?>
		<table>
			<td>Bạn không có đồ trong giỏ hàng</td>
		</table>
	<?php }else{ 
		$tong_tien = 0;

		if (isset($_SESSION['cart'])) {
			$cart = $_SESSION['cart'];
			?>


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
								<?php echo number_format($tung_san_pham['gia']) ?>đ

							</td>
							<td>
								<a href="so_luong_update.php?ma=<?php echo $ma ?>&type=decre" style="font-size: 25px;">-</a>
								<?php echo $tung_san_pham['so_luong']?>
								<a href="so_luong_update.php?ma=<?php echo $ma ?>&type=incre" style="font-size: 25px;">+</a>
							</td>
							<td>
								<?php 
								$tong = $tung_san_pham['gia']*$tung_san_pham['so_luong'];
								echo  number_format($tong) ;
								$tong_tien += $tong;
							?>đ
						</td>
						<td>
							<a href="xoa_process.php?ma=<?php echo $ma?>" onclick="	if(confirm('Bạn có chắc xóa món hàng này?')){}else{return false;}">Xóa
							</a>
						</td>
					</tr>
				<?php } ?>

				<!-- Tính tổng tiền -->
				<tr class="tong_tien">
					<td colspan="4" >
						Tổng tiền hóa đơn là :
					</td>
					<td colspan="2" >
						<span > <?php  echo number_format($tong_tien)?>đ</span>
					</td>
				</tr>


				<!-- Khách có tài khoản -->
				<?php if(isset($_SESSION['ma_kh'])){?>
					<tr class="tong_tien">
						<td colspan="4" >
							<span>Khuyến mãi (</span>
							<?php 
							$ma_kh_session = $_SESSION['ma_kh'];
							$sql = "select cap_do from khach_hang where ma = '$ma_kh_session'";
							$result = mysqli_query($connect,$sql);
							$row = mysqli_fetch_array($result);
							$row_cap_do = $row['cap_do'];

							$sql = "select phan_tram from giam_gia where ma_cap_do = '$row_cap_do'";
							$result = mysqli_query($connect,$sql);
							$row = mysqli_fetch_array($result);
							$row_phan_tram = $row['phan_tram'];
							echo $row_phan_tram."%)";
							?>
							<span>giảm còn :</span>
						</td>
						<td colspan="2" >
							<span >
								<?php $tong_tien_da_giam = $tong_tien - $tong_tien * ($row_phan_tram/100);
								echo number_format($tong_tien_da_giam)?>đ
							</span>
						</td>
					</tr>
				<?php } ?>
				<tr>
					<td colspan="6" >
						<a href="xoa_all_process.php" class="huy_tat">Hủy tất cả</a>
					</td>
				</tr>
			</tbody>
		</table>
		<!-- <button onclick="showForm()">Show the form</button> -->
		<br>
		<?php include('../dathang/form.php') ?>
	<?php } ?>

<?php } ?>


</body>
</html>