<?php include '../check_nhanvien_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý thể loại</title>
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
			<?php 	
			include '../main_top_div.php';
			?>
			<div class="main_content">
				<a href="them_form.php" class="them">
					<i class="fa fa-plus"></i>
					Thêm thể loại
				</a>
				<?php 
				include  '../../connect.php' ;
				$sql = "select * from the_loai";
				$result= mysqli_query($connect, $sql);
				?>
				<h2 class="main_content_the_loai">Danh sách thể loại</h2>
				<table border="1" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>Mã</th>
							<th>Tên thể loại</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $tung_the_loai) { ?>
							<tr>
								<td>
									<?php echo $tung_the_loai['ma'] ?>
								</td>
								<td>
									<?php echo $tung_the_loai['ten_the_loai'] ?>
								</td>
								<td>
									<a href="sua_form.php?ma=<?php echo	$tung_the_loai['ma'] ?>">
										<i class="far fa-edit"></i>
									</a>
								</td>
								<td>
									<a href="xoa_process.php?ma=<?php echo	$tung_the_loai['ma']?>" onclick="if(confirm('Xóa thật hả?')){}else{return false;}">
										<i class="far fa-minus-square"></i>
									</a>
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