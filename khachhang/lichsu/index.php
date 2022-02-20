<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<?php include '../thuvien.php'; ?>
</head>
<body>
	<div width="100%">
		<div width="10%" style="font-size:20px; ">
			<a href="../"><i class="fas fa-arrow-left"></i>
				<span>Quay lại</span>
			</a>
		</div>
		<div width="90%"><h1 align="center" style=" font-weight: 600;">Lịch sử mua hàng</h1></div>
	</div>
	<br>

	<?php 
	require '../../admin/connect.php' ;
	$ma_kh = $_SESSION['ma_kh'];
	$sql = "select * from hoa_don where ma_khach_hang = '$ma_kh' and trang_thai = 1";
	$result = mysqli_query($connect, $sql);
	$number = mysqli_num_rows($result);
	if ($number == 0) {
		echo '<table>
		<td>Bạn chưa từng mua hàng</td>
		</table>';
	}else{
		foreach ($result as $row) { ?>
			Ngày đặt: 
			<?php
			$date=date_create($row['thoi_gian_dat']);
			echo date_format($date,"d.m.Y - H:i:s");
			?>
			<div class="div_bang_chi_tiet_hoa_don">
				<?php 
				$ma_hoa_don = $row['ma'];
				$sql = "select * from hoa_don_chi_tiet where ma_hoa_don = '$ma_hoa_don'";
				$result = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($result);
				?>
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
								<td class="div_anh" >
									<img src="<?php echo $row['anh'] ?>" height="100px">
								</td>
								<td>
									<?php echo $tung_hoa_don['so_luong'] ?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<?php } 

	}?>

	
</body>
</html>