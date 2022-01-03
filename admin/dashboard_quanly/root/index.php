<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Quản lý</title>

	<link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
		include '../header.php';
	 ?>
	<div class="container">
		<?php 	
			include('../menu.php');
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
						<!-- <?php  
							// include  '../connect.php' ;
							// $sql = "select * from nhan_vien";
							// $ten_nv = mysqli_query($connect, $sql);
							// echo $ten_nv['ten'];
					?> -->
					<i class="fas fa-user-alt"></i>
				</div>
			</div>	
			<div class="main_content">
				đây là trang chủ
			</div>
		</main>
	</div>

</body>
</html>