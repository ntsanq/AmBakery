<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chi tiết Đơn hàng</title>
	<link rel="stylesheet" href="../../css/dashboard.css">
	<?php 
	include '../thuvien.php';
	?>
</head>
<body>
	<?php 
	require '../../connect.php';
	// $sql = "select ma_hoa_don, count(*) FROM hoa_don_chi_tiet GROUP BY ma_hoa_don;";
	$ma = $_GET['ma'];
	$sql = "select * FROM hoa_don_chi_tiet where ma_hoa_don = '$ma'";
	$result = mysqli_query($connect, $sql);
	$tong_tien = 0;
	?>
	<div width="100%" class="chi_tiet_header">
		<div width="10%" class="a_arrow">
			<a href="index.php"><i class="fas fa-arrow-left"></i>
				<span>Quay lại</span>
			</a>
		</div>
		<div width="90%"><h1 align="center" class="chi_tiet_ma">
			Mã hóa đơn: <?php echo $ma ?>
		</h1></div>
	</div>
	<div class="div_bang_chi_tiet_hoa_don">
		<table class="bang_chi_tiet_hoa_don" >
			<thead class="thead-dark">
				<tr>
					<th>
						Tên sản phẩm
					</th>
					<th></th>
					<th>
						Số lượng
					</th>
					<th>
						Tổng tiền
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $tung_hoa_don) { ?>
					<tr>
						<td class="div_ten_sp">
							<?php
							$ma_san_pham = $tung_hoa_don['ma_san_pham'];
							$sql= "select * from san_pham where ma = '$ma_san_pham'";
							$result = mysqli_query($connect,$sql);
							$row= mysqli_fetch_array($result);
							echo $row['ten_san_pham'];
							?>
						</td>
						<td class="div_anh">
							<img src="<?php echo $row['anh'] ?>" height="100px" >
						</td>
						<td>
							<?php echo $tung_hoa_don['so_luong'] ?>
						</td>
						<td>
							<?php 
							$tong = $row['gia']*$tung_hoa_don['so_luong'];
							echo number_format($tong);
							$tong_tien += $tong;
						?>đ
					</td>
				</tr>
			<?php } ?>

			<tr>
				<td colspan="3">Tổng tiền hóa đơn</td>
				<td ><?php echo number_format($tong_tien) ?>đ</td>
			</tr>
			<tr>
				<td colspan="3">
					Tổng tiền đã thanh toán 
				</td>
				<td >
					<?php 
					$sql= "select * from hoa_don where ma = '$ma'";
					$result = mysqli_query($connect,$sql);
					$row= mysqli_fetch_array($result);
					echo number_format($row['tong_tien']);
				?>đ
			</td>
		</tr>
		<tr>
			<td colspan="3">Số tiền đã giảm 
				<?php 
				$giam = 0;
				$giam = 100 - $row['tong_tien']/$tong_tien*100;
				echo '('.$giam.'%)';
				?>
			</td>
			<td>
				<?php echo number_format($tong_tien - $row['tong_tien']).'đ'; ?>
			</td>
		</tr>
	</tbody>
</table>
</div>

Người đặt:
<?php 
$sql = "select ma_khach_hang FROM hoa_don where ma = '$ma'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);	
$ma_kh = $row['ma_khach_hang'];
$sql = "select ten FROM khach_hang where ma = '$ma_kh'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);	
if (empty($row['ten'])) {
	echo "khách vãng lai";
}else{
	echo $row['ten'];
}
?>
<br>
Người duyệt:
<?php 
$sql = "select duyet_boi from hoa_don where ma = $ma";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
echo $row['duyet_boi'];
?>
</body>
</html>