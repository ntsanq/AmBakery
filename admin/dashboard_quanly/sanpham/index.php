<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý sản phẩm</title>

	<link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div id="header">
			<a href="#" class="header__logo" >
				<span><b>am</b>bakery</span>
			</a>
		</div>
	</header>
	<div class="container">
		<?php 	
			include '../sidebar_part.php';
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
				<a href="form_them_sanpham.php">Thêm sản phẩm</a>


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
								<a href="form_sua_sanpham.php?ma=<?php echo $tung_san_pham['ma']?>">Sửa</a>
							</td>
							<td>
								<a href="xoa_sanpham_process.php?ma=<?php echo $tung_san_pham['ma']?>" onclick="if(confirm('Xóa thật hả?')){}else{return false;}">Xóa</a>
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