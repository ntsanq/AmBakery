<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý thể loại</title>

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
			<div class="main_top">
				<div class="main_top_left">
					<form>
						<input type="search" placeholder="Tìm kiếm..." name="tim_kiem">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<div class="main_top_right">
					admin's name
				</div>
			</div>
			<div class="main_content">
				<a href="form_them.php" class="them">
					<i class="fa fa-plus"></i>
					Thêm thể loại
				</a>
				<?php 
				include  '../../connect.php' ;
				$sql = "select * from the_loai";
				$result= mysqli_query($connect, $sql);
				?>
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
									<a href="form_sua.php?ma=<?php echo	$tung_the_loai['ma'] ?>">Sửa</a>
								</td>
								<td>
									<a href="xoa_process.php?ma=<?php echo	$tung_the_loai['ma']?>" onclick="if(confirm('Xóa thật hả?')){}else{return false;}">Xóa</a>
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