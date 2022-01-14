<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý nhân viên</title>
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
				<a href="form_them.php" class="them">
					<i class="fa fa-plus"></i>
					Thêm nhân viên
				</a>
				<?php 
				include  '../../connect.php' ;
				$sql = "select * from nhan_vien";
				$result= mysqli_query($connect, $sql);
				?>
				<table border="1" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>
								Mã
							</th>
							<th>
								Tên nhân viên
							</th>
							<th>
								Địa chỉ
							</th>
							<th>
								Sđt
							</th>
							<th>
								Email
							</th>
							<th>
								Chức vụ
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
						<?php foreach ($result as $tung_nhan_vien  ) {?>
							<tr>
								<td>
									<?php echo $tung_nhan_vien['ma'] ?>
								</td>
								<td>
									<?php echo $tung_nhan_vien['ten'] ?>
								</td>
								<td>
									<?php echo $tung_nhan_vien['dia_chi'] ?>
								</td>
								<td>
									<?php echo $tung_nhan_vien['sdt'] ?>
								</td>
								<td>
									<?php echo $tung_nhan_vien['email'] ?>
								</td>
								<td>
									<?php 
									if ($tung_nhan_vien['cap_do'] == 1) {
										echo "Quản lý";
									}else{
										echo "Nhân viên";
									}
									?>
								</td>
								<td>
									<a href="form_sua.php?ma=<?php echo $tung_nhan_vien['ma']?>">Sửa</a>
								</td>
								<td>
									<a href="xoa_process.php?ma=<?php echo $tung_nhan_vien['ma']?>" onclick="if(confirm('Xóa thật hả?')){}else{return false;}"
										>Xóa</a>

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