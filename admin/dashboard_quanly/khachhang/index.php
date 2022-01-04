<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý khách hàng</title>

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
			include '../main_top_div.php' 
			?>
			<div class="main_content">
				<a href="form_them.php" class="them">
					<i class="fa fa-plus"></i>
					<span>Thêm khách hàng</span>
				</a>
				<?php 
				include  '../../connect.php' ;
				$sql = "select * from khach_hang";
				$result= mysqli_query($connect, $sql);
				?>
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
								Mật khẩu
							</th>
							<!-- <th>
								Loại khách hàng
							</th> -->
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
									<?php echo $tung_khach_hang['mat_khau'] ?>
								</td>
								<!-- <td>
									<?php echo $tung_khach_hang['cap_do'] ?>
								</td> -->
								<td>
									<a href="form_sua.php?ma=<?php echo $tung_khach_hang['ma'] ?>">Sửa</a>
								</td>
								<td>
									<a href="xoa_process.php?ma=<?php echo $tung_khach_hang['ma'] ?> " onclick="if(confirm('Xóa thật hả?')){}else{return false;}">Xóa</a>
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