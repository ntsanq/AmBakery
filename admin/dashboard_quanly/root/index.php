<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Quản lý</title>

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
		include('../menu.php');
		?>
		<main >
			<?php 	
			include '../main_top_div.php';
			?>
			
			<div class="main_content" >
				<div class="bgimg">
					<div >
						<p>AmBakery's</p>
					</div>
					<div >
						<h1>COMING SOON</h1>
						<hr>
						<p>... days left</p>
					</div>
				</div>
			</div>
		</main>
	</div>

</body>
</html>