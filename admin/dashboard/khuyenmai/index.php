<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Quản lý</title>

	<?php 
	include '../thuvien.php';
	?>
</head>
<body>
	<?php 
	include '../header.php';
	?>
	<div class="container">
		<?php 	
		include('../menu.php');
		?>
		<main >
			<?php 	
			include '../main_top_div.php';
			?>
			
			<div class="main_content" >
				<div class="bgimg">
					Đây là trang khuyến mãi
					<h1>Chế độ khuyến mãi</h1>

					<?php 
					require '../../connect.php';
					$sql = "select * FROM giam_gia";
					$result = mysqli_query($connect, $sql);
					?>


					<table border="1" width="100%">
						<thead class="thead-dark">
							<tr>
								<th>
									Loại khách hàng
								</th>
								<th>
									Phần trăm
								</th>
								<th>
									Ghi chú
								</th>
								<th>
									Sửa
								</th>
								<th>
									Xóa
								</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $tung_giam_gia) { ?>
								<tr>
									<td>
										<?php echo $tung_giam_gia['ma_cap_do'] ?>
									</td>
									<td>
										<?php echo $tung_giam_gia['phan_tram'] ?>%
									</td>
									<td>
										<?php echo $tung_giam_gia['ghi_chu'] ?>
									</td>
									<td>
										<a href="sua_form.php?ma_cap_do=<?php echo $tung_giam_gia['ma_cap_do'] ?>">
											<i class="far fa-edit"></i>
										</a>
									</td>
									<td>
										<a href="xoa_process.php?ma_cap_do=<?php echo $tung_giam_gia['ma_cap_do'] ?> " onclick="if(confirm('Xóa thật hả?')){}else{return false;}">
											<i class="far fa-minus-square"></i>
										</a>
									</td>

								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
	</div>

</body>
</html>