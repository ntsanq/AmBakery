<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý đơn hàng</title>
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
			<?php 	
			include '../main_top_div.php';
			?>
			<div class="main_content">
				<h1>Danh sách hóa đơn</h1>

				<?php 
				require  '../../connect.php' ;
				$sql = "select trang_thai from hoa_don";
				$result= mysqli_query($connect, $sql);
				?>


				<!-- -------------------------Bảng Chưa duyệt ---------------------->
				<h2 class="main_content_the_loai">Chưa được duyệt</h2>
				<table border="1" width="100%">
					<?php 
					$sql = "select * from hoa_don where trang_thai = 0 ";
					$result = mysqli_query($connect, $sql);
					?>
					<thead class="thead-dark">
						<tr>
							<th>
								Mã
							</th>
							<th>
								Mã khách hàng
							</th>
							<th>
								Thời gian đặt
							</th>
							<th>
								Tên người nhận
							</th>
							<th>
								Số điện thoại người nhận
							</th>
							<th>
								Địa chỉ giao hàng
							</th>
							<th>
								Ghi chú
							</th>
							<th>
								Tổng tiền
							</th>
							<th>
								Duyệt
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $tung_hoa_don) { ?>
							<tr>
								<td>
									<a href="chi_tiet.php?ma=<?php echo $tung_hoa_don['ma'] ?>">
										<?php echo $tung_hoa_don['ma'] ?>
									</a>
								</td>
								<td>
									<?php echo $tung_hoa_don['ma_khach_hang'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['thoi_gian_dat'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['ten_nguoi_nhan'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['sdt_nguoi_nhan'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['dia_chi_giao_hang'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['ghi_chu'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['tong_tien'] ?>
								</td>
								<td>
									<a href="duyet_process.php?ma=<?php echo $tung_hoa_don['ma'] ?>">
										<i class="fas fa-check"></i>
									</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>	

				<!-- -------------------------Bảng đã duyệt ---------------------->
				<h2 class="main_content_the_loai">Đã được duyệt</h2>
				<table border="1" width="100%">
					<?php 
					$sql = "select * from hoa_don where trang_thai = 1 ";
					$result = mysqli_query($connect, $sql);
					?>
					<thead class="thead-dark">
						<tr>
							<th>
								Mã
							</th>
							<th>
								Mã khách hàng
							</th>
							<th>
								Thời gian đặt
							</th>
							<th>
								Tên người nhận
							</th>
							<th>
								Số điện thoại người nhận
							</th>
							<th>
								Địa chỉ giao hàng
							</th>
							<th>
								Ghi chú
							</th>
							<th>
								Tổng tiền
							</th>
							<th>
								Trạng thái
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $tung_hoa_don) { ?>
							<tr>
								<td>
									<a href="chi_tiet.php?ma=<?php echo $tung_hoa_don['ma'] ?>">
										<?php echo $tung_hoa_don['ma'] ?>
									</a>
								</td>
								<td>
									<?php echo $tung_hoa_don['ma_khach_hang'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['thoi_gian_dat'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['ten_nguoi_nhan'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['sdt_nguoi_nhan'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['dia_chi_giao_hang'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['ghi_chu'] ?>
								</td>
								<td>
									<?php echo $tung_hoa_don['tong_tien'] ?>
								</td>
								<td>
									<?php 
									if ($tung_hoa_don['trang_thai'] == 0) {
										echo "Chưa duyệt";
									}else{
										echo "Đã duyệt";
									}
									?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>	
			</div>
		</main>
	</div>

</body>
</html>