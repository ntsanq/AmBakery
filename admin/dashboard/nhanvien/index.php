<?php include '../check_nhanvien_login.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý nhân viên</title>
	<link rel="stylesheet" href="../../css/dashboard.css">
	<?php 
	include '../thuvien.php';
	?>
</head>
<body>

	<?php require  '../../connect.php' ; ?>

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
						<input type="search" placeholder="Tìm kiếm nhân viên theo mã hoặc tên .." name="tim_kiem">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<?php include '../main_top_right.php'; ?>
			</div>
			<!-- --------------------------------- -->

			<div class="main_content">
				<a href="them_form.php" class="them">
					<i class="fa fa-plus"></i>
					Thêm nhân viên
				</a>
				<!-- ---------------Tìm kiếm--------------- -->
				<?php if (isset($_GET['tim_kiem'])){?>
					<h2 class="main_content_the_loai">Kết quả tìm kiếm '<?php echo $_GET['tim_kiem']; ?>'</h2>
					<table border="1" width="100%">
						<?php 
						$tim_kiem = $_GET['tim_kiem'];
						$sql = "select * from nhan_vien where ten like '%$tim_kiem%' or ma like '%$tim_kiem%' ";
						$result = mysqli_query($connect, $sql);
						?>

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
										<a href="sua_form.php?ma=<?php echo $tung_nhan_vien['ma']?>">
											<i class="far fa-edit"></i>
										</a>
									</td>
									<td>
										<a href="xoa_process.php?ma=<?php echo $tung_nhan_vien['ma']?>" 
											onclick="
											if(confirm('Bạn có chắc muốn xóa nhân viên này?')){

											}else{return false;}"
											>
											<i class="far fa-minus-square"></i>
										</a>

									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				<?php } else{?>
					<!-- ------------------------------------- -->



					<?php 
					$sql= "select cap_do from nhan_vien";
					$result= mysqli_query($connect, $sql);
					?>
					<!-- -------------------------Bảng Quản lý ---------------------->
					<h2 class="main_content_the_loai">Quản lý</h2>
					<table border="1" width="100%">
						<?php 
						$sql = "select * from nhan_vien where cap_do = 1 ";
						$result = mysqli_query($connect, $sql);
						?>
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
										<a href="sua_form.php?ma=<?php echo $tung_nhan_vien['ma']?>">
											<i class="far fa-edit"></i>
										</a>
									</td>
									<td>
										<a href="xoa_process.php?ma=<?php echo $tung_nhan_vien['ma']?>" onclick="if(confirm('Bạn có chắc muốn xóa nhân viên này?')){}else{return false;}"
											>
											<i class="far fa-minus-square"></i>
										</a>

									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>

					<!-- -------------------------Bảng Nhân viên ---------------------->
					<h2 class="main_content_the_loai">Nhân viên</h2>
					<table border="1" width="100%">
						<?php 
						$sql = "select * from nhan_vien where cap_do = 0 ";
						$result = mysqli_query($connect, $sql);
						?>
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
										<a href="sua_form.php?ma=<?php echo $tung_nhan_vien['ma']?>">
											<i class="far fa-edit"></i>
										</a>
									</td>
									<td>
										<a href="xoa_process.php?ma=<?php echo $tung_nhan_vien['ma']?>" onclick="if(confirm('Bạn có chắc muốn xóa nhân viên này?')){}else{return false;}"
											>
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