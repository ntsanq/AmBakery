<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý khách hàng</title>
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
		include '../menu.php';
		?>
		<main >
			<!-- ----------------maintopdiv-------------------- -->
			<div class="main_top">
				<div class="main_top_left">
					<form>
						<input type="search" placeholder="Tìm kiếm khách hàng theo mã hoặc tên .." name="tim_kiem">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<?php include '../main_top_right.php'; ?>
			</div>
			<!-- --------------------------------- -->
			<div class="main_content">
				
				<?php if (isset($_GET['tim_kiem'])) {?>
					<h2 class="main_content_the_loai">Kết quả tìm kiếm '<?php echo $_GET['tim_kiem']; ?>'</h2>
					<table width="100%">
						<?php 
						$tim_kiem = $_GET['tim_kiem'];
						include  '../../connect.php' ;
						$sql = "select * from khach_hang where ten like '$tim_kiem' or ma like '$tim_kiem'";
						$result= mysqli_query($connect, $sql);
						?>
						<thead class="thead-dark">
							<tr>
								<th>
									Mã
								</th>
								<th>
									Tên khách hàng
								</th>
								<th>
									Giới tính
								</th>
								<th>
									Ngày sinh
								</th>
								<th>
									Email
								</th>
								<th>
									Sđt
								</th>
								<th>
									Địa chỉ
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
							<?php foreach ($result as $tung_khach_hang) { ?>
								<tr>
									<td>
										<?php echo $tung_khach_hang['ma'] ?>
									</td>
									<td>
										<?php echo $tung_khach_hang['ten'] ?>
									</td>
									<td>
										<?php 
										if ($tung_khach_hang['gioi_tinh'] == 1) {
											echo "Nam";
										}else{
											echo "Nữ";
										}
										?>
									</td>
									<td>
										<?php echo $tung_khach_hang['ngay_sinh'] ?>
									</td>
									<td>
										<?php echo $tung_khach_hang['email'] ?>
									</td>
									<td>
										<?php echo $tung_khach_hang['sdt'] ?>
									</td>
									<td>
										<?php echo $tung_khach_hang['dia_chi'] ?>
									</td>
									<td>
										<a href="sua_form.php?ma=<?php echo $tung_khach_hang['ma'] ?>">
											<i class="far fa-edit"></i>
										</a>
									</td>
									<td>
										<a href="xoa_process.php?ma=<?php echo $tung_khach_hang['ma'] ?> " onclick="if(confirm('Xóa thật hả?')){}else{return false;}">
											<i class="far fa-minus-square"></i>
										</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>	
				</table>
			<?php }else{ ?>

				<?php 
				include  '../../connect.php' ;
				$sql = "select * from khach_hang";
				$result= mysqli_query($connect, $sql);
				?>
				<h2 class="main_content_the_loai">Danh sách khách hàng</h2>
				<table border="1" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>
								Mã
							</th>
							<th>
								Tên khách hàng
							</th>
							<th>
								Giới tính
							</th>
							<th>
								Ngày sinh
							</th>
							<th>
								Email
							</th>
							<th>
								Sđt
							</th>
							<th>
								Địa chỉ
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
						<?php foreach ($result as $tung_khach_hang) { ?>
							<tr>
								<td>
									<?php echo $tung_khach_hang['ma'] ?>
								</td>
								<td>
									<?php echo $tung_khach_hang['ten'] ?>
								</td>
								<td>
									<?php 
									if ($tung_khach_hang['gioi_tinh'] == 1) {
										echo "Nam";
									}else{
										echo "Nữ";
									}
									?>
								</td>
								<td>
									<?php echo $tung_khach_hang['ngay_sinh'] ?>
								</td>
								<td>
									<?php echo $tung_khach_hang['email'] ?>
								</td>
								<td>
									<?php echo $tung_khach_hang['sdt'] ?>
								</td>
								<td>
									<?php echo $tung_khach_hang['dia_chi'] ?>
								</td>
								<td>
									<a href="sua_form.php?ma=<?php echo $tung_khach_hang['ma'] ?>">
										<i class="far fa-edit"></i>
									</a>
								</td>
								<td>
									<a href="xoa_process.php?ma=<?php echo $tung_khach_hang['ma'] ?> " onclick="if(confirm('Xóa thật hả?')){}else{return false;}">
										<i class="far fa-minus-square"></i>
									</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>	
			<?php } ?>
		</div>
	</main>
</div>

</body>
</html>