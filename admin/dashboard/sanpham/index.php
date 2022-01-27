<?php include '../check_nhanvien_login.php' ?>
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
			<?php 	
			include '../main_top_div.php';
			?>
			<div class="main_content">
				<a href="them_form.php" class="them">
					<i class="fa fa-plus"></i>
					Thêm sản phẩm
				</a>

				<?php 
				require  '../../connect.php' ;
				$sql_the_loai = "select * from the_loai";
  				$result_the_loai = mysqli_query($connect, $sql_the_loai);
				?>
				
				<?php foreach ($result_the_loai as $tung_the_loai) {?>
					
				<h2 class="main_content_the_loai"><?php echo $tung_the_loai['ten_the_loai'] ?></h2>				

				<!-- ------------TABLE---------- -->
				<table width="100%">
					<?php 
		            $ma=$tung_the_loai['ma'];
		            $sql_san_pham = "select * from san_pham where ma_the_loai = '$ma'";
		            $result_san_pham = mysqli_query($connect, $sql_san_pham);
		            ?>
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
						<?php foreach ($result_san_pham as $tung_san_pham  ) {?>
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
									$tungsp = $tung_san_pham['ma_the_loai'];
									$sql_the_loai = "select * from the_loai where ma = $tungsp";
									$kq_the_loai = mysqli_query($connect, $sql_the_loai);
									$ten_kq = mysqli_fetch_assoc($kq_the_loai);
									echo $ten_kq['ten_the_loai'];
									?>
								</td>
								<td>
									<a href="sua_form.php?ma=<?php echo $tung_san_pham['ma']?>">
										<i class="far fa-edit"></i>
									</a>
								</td>
								<td>
									<a href="xoa_process.php?ma=<?php echo $tung_san_pham['ma']?>" onclick="if(confirm('Xóa thật hả?')){}else{return false;}">
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