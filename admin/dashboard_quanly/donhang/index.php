<?php session_start(); 
if (!isset($_SESSION['cap_do'])) {
	header("Location: ../../index.php");
}
?>
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
			<?php 	
			include '../main_top_div.php';
			?>
			<div class="main_content">
				đây là trang đơn hàng
				<h1>Danh sách hóa đơn</h1>
				<table>
					<th></th>
				</table>
			</div>
		</main>
	</div>

</body>
</html>