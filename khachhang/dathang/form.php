<h2>ĐẶT HÀNG</h2>
<br>
<br>
<div id="frm">
	<form method="post" action="../dathang/checkout_process.php"  id="formElement" >
		<?php 
		if (isset($_SESSION['ma_kh'])) {
		$ma=$_SESSION['ma_kh'];
		$sql = "select * from khach_hang where ma = '$ma'";
		$result=  mysqli_query($connect, $sql);
		$row = mysqli_fetch_array($result);
		}
		?>
		<input type="hidden" name="ma" value="<?php if(isset($_SESSION['ma_kh'])) {
		echo $row['ma'];}?>">
		Tên người nhận:<br>
		<input type="text" name="ten" value="<?php if(isset($_SESSION['ma_kh'])) {
		echo $row['ten'];}?>"><br>
		Sđt người nhận:
		<input type="text" name="sdt" value="<?php if(isset($_SESSION['ma_kh'])) {
		echo $row['sdt'];}?>"><br>
		Địa chỉ giao hàng:
		<input type="text" name="dia_chi" value="<?php if(isset($_SESSION['ma_kh'])) {
		echo $row['dia_chi'];}?>"><br>
		Ghi chú:
		<input type="text" name="ghi_chu">
		<br>
		<button type="submit" id="btn_dat_hang">Đặt hàng</button>
	</form>
</div>