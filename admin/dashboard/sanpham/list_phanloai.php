<!-- -----------menu chia the loai----------- -->
<div class="list_phanloai">
	<?php 
	require '../../connect.php';
	$sql_the_loai = "select * from the_loai";
	$result_the_loai = mysqli_query($connect, $sql_the_loai);
	foreach ($result_the_loai as $row) {?>
		<div class="chia_the_loai">
			<ul>
				<li>
					<?php 
					$ten_the_loai = $row['ten_the_loai'];
					$sql= "select * from the_loai where ten_the_loai = '$ten_the_loai'";
					$result = mysqli_query($connect,$sql);
					$ma_the_loai = mysqli_fetch_array($result);
					$lay_ma = $ma_the_loai['ma'];
					?>
					<a href="../sanpham/phanloai.php?ma=<?php echo $lay_ma ?>"><?php echo $row['ten_the_loai'] ?></a>
				</li>
			</ul>
		</div>
	<?php } ?>
</div>
