<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý sản phẩm</title>

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
					Thêm sản phẩm
				</a>


				<!-- ---------------------------------------------------------------------------------- -->
				<?php 
				include  '../../connect.php' ;
				$sql = "select * from san_pham";
				$result= mysqli_query($connect, $sql);
				?>
				<table border="1" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>
								Mã
							</th>
							<th>
								Tên sản phẩm
							</th>
							<th>
								Mô tả
							</th>
							<th>
								Ảnh
							</th>
							<th>
								Giá
							</th>
							<th>
								Thể loại
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
						<?php foreach ($result as $tung_san_pham  ) {?>
							<tr>
								<td>
									<?php echo $tung_san_pham['ma'] ?>
								</td>
								<td>
									<?php echo $tung_san_pham['ten_san_pham'] ?>
								</td>
								<td>
									<?php echo $tung_san_pham['mo_ta'] ?>
								</td>
								<td>
									<img src="<?php echo $tung_san_pham['anh'] ?>" height="100px">
								</td>
								<td>
									<?php echo $tung_san_pham['gia'] ?>đ
								</td>
								<td>
									<?php 
									$tungsp = $tung_san_pham['ma'];
									$sql_the_loai = "select * from the_loai where ma = $tungsp";
									$kq_the_loai = mysqli_query($connect, $sql_the_loai);
									$ten_kq = mysqli_fetch_assoc($kq_the_loai);
									echo $ten_kq['ten_the_loai'];

									?>
								</td>
								<td>
									<a href="form_sua.php?ma=<?php echo $tung_san_pham['ma']?>">Sửa</a>
								</td>
								<td>
									<a href="xoa_process.php?ma=<?php echo $tung_san_pham['ma']?>" onclick="if(confirm('Xóa thật hả?')){}else{return false;}">Xóa</a>
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