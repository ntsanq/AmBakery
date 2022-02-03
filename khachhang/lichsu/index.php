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
	<?php include 'header.php'; ?>

	<?php 
	require '../connect.php';
	$ma_kh = $_SESSION['ma_kh'];
	$sql = "select * from hoa_don where ma_khach_hang = '$ma_kh'";
	$result = mysqli_query($connect, $sql);
	foreach ($result as $row) { ?>
		Ngày đặt: <?php echo $row['thoi_gian_dat'] ?>
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
							<td>
								<?php
								$ma_san_pham = $tung_hoa_don['ma_san_pham'];
								$sql= "select * from san_pham where ma = '$ma_san_pham'";
								$result = mysqli_query($connect,$sql);
								$row= mysqli_fetch_array($result);
								echo $row['ten_san_pham'];
								?>
							</td>
							<td>
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
	<?php } ?>
</body>
</html>