<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lý đơn hàng</title>
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
				đây là trang đơn hàng
			</div>
		</main>
	</div>

</body>
</html>