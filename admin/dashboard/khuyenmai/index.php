<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý khuyến mãi</title>
	<link rel="stylesheet" href="../../css/dashboard.css">
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
			<!-- ----------------maintopdiv-------------------- -->
			<div class="main_top">
				<div class="main_top_left">
					
				</div>
				<?php include '../main_top_right.php'; ?>
			</div>
			<!-- --------------------------------- -->
			
			<div class="main_content" >
				<div class="bgimg">
					<h2 class="main_content_the_loai">Chế độ khuyến mãi</h2>

					<?php 
					require '../../connect.php';
					$sql = "select * FROM giam_gia";
					$result = mysqli_query($connect, $sql);
					?>


					<table border="1" width="100%">
						<thead class="thead-dark">
							<tr>
								<th>
									Phần trăm
								</th>
								<th>
									Ghi chú
								</th>
								<th>
									Sửa
								</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $tung_giam_gia) { ?>
								<tr>
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