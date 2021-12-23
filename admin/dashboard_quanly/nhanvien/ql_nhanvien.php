<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý nhân viên</title>

	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
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
		
		<div class="sidebar">
			<ul class="nav__list">
				<li class="nav__list--item">
					<a href="../index.php">
						<i class="fas fa-home nav__icon"></i>
						<span>Trang chủ</span>
					</a>
				</li>
				<li class="nav__list--item">
					<a href="ql_nhanvien.php">
						<i class="fas fa-male nav__icon"></i>
						<span>Quản lý nhân viên</span>
					</a>
				</li>
				<li class="nav__list--item">
					<a href="../sanpham/ql_sanpham.php">
						<i class="fas fa-bread-slice nav__icon"></i>
						<span>Quản lý sản phẩm</span>
					</a>
				</li>
				<li class="nav__list--item">
					<a href="../ql_donhang.php">
						<i class="fas fa-shopping-bag nav__icon"></i>
						<span>Quản lý đơn hàng</span>
					</a>
				</li>
				<li class="nav__list--item">
					<a href="../theloai/ql_theloai.php">
						<i class="fas fa-tasks nav__icon"></i>
						<span>Danh mục thể loại</span>
					</a>
				</li>
				<li class="nav__list--item">
					<a href="../khachhang/ql_khachhang.php">
						<i class="fas fa-users nav__icon"></i>
						<span>Khách hàng</span>
					</a>
				</li>
				<li class="nav__list--item">
					<a href="../../login.php">
						<i class="fas fa-sign-out-alt nav__icon"></i>
						<span>Log out</span>
					</a>
				</li>
			</ul>
		</div>
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
				<a href="form_them_nhanvien.php">Thêm nhân viên</a>
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
								<?php echo $tung_nhan_vien['cap_do'] ?>
							</td>
							<td>
								<a href="form_sua_nhanvien.php?ma=<?php echo $tung_nhan_vien['ma']?>">Sửa</a>
							</td>
							<td>
								<a href="xoa_nhanvien_process.php?ma=<?php echo $tung_nhan_vien['ma']?>" onclick="if(confirm('Xóa thật hả?')){}else{return false;}"
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