<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
	?>
	<h1>Mã hóa đơn: <?php echo $ma ?></h1>
	<table border="1" width="100%">
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
</body>
</html>