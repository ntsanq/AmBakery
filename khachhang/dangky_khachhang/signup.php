<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký khách hàng</title>
	<link rel="stylesheet" href="../css/form.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
</head>
<body>
<header>
        <div id="header">
            <a href="../login.php" class="header__logo" >
                <span><b>am</b>bakery</span>
            </a>
        </div>
    </header>
	<div class="container">
		
		<form action="signup_process.php" method="POST">
			<div >
				<h1>Đăng ký khách hàng mới</h1>
				
				<!-- <label for="ma">Mã khách hàng: </label>
				<input type="text" name="ma">
				<br> -->

				<label for="ten">Tên khách hàng: </label>
				<input class="input--form" type="name" name="ten" id="ten"><span class="span_loi" id="loi_ten"></span>
				<br>

				<label  for="gioi_tinh">Giới tính: </label>
				<input  type="radio" name="gioi_tinh" value="nam">
				<label class="label--radio" for="nam">Nam </label>
				<input  type="radio" name="gioi_tinh" value="nu">
				<label class="label--radio" for="nu">Nữ </label>
				<span class="span_loi" id="loi_gioi_tinh"></span>
				<br>

				<label for="ngay_sinh">Ngày sinh: </label>
				<input class="input--form" type="date" name="ngay_sinh" id="ngay_sinh"><span class="span_loi" id="loi_ngay_sinh" ></span>
				<br>
				<label for="email">Email: </label>
				<input class="input--form" type="email" name="email" id="email"><span class="span_loi" id="loi_email"></span>
				<span class="span_loi"><?php 
				if (isset($_GET['error'])) {
					echo $_GET['error'];
				}
				 ?></span>
				
				<br>

				<label for="sdt">Số điện thoại: </label>
				<input class="input--form" type="tel" name="sdt" id="sdt"><span class="span_loi" id="loi_sdt"></span>
				<br>

				<label for="dia_chi">Địa chỉ: </label>
				<input class="input--form" name="dia_chi" id="dia_chi"><span class="span_loi" id="loi_dia_chi"></span>
				<br>

				<label for="mat_khau">Mật khẩu: </label>
				<input class="input--form" type="password" name="mat_khau" id="mat_khau"><span class="span_loi" id="loi_mat_khau"></span>
				<br>

				 <button type="submit" id="btn" onclick="return kiem_tra()">Đăng ký</button>
			</div>
		</form>
	</div>

<script type="text/javascript">
	function kiem_tra(){
		let kiem_tra_loi = false;
		let ten = document.getElementById('ten').value;
		console.log(ten);
		if(ten.length == 0 || ten == ''){
			document.getElementById('loi_ten').innerHTML = 'tên không được để trống';
			kiem_tra_loi = true;
		}else{
			let regex_ten = /^([A-ZÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴ][a-zàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵ]{1,6}\s?)+$/;
			if (regex_ten.test(ten)==false) {
				document.getElementById('loi_ten').innerHTML = "tên không hợp lệ";
				kiem_tra_loi= true;
			}else{
				document.getElementById('loi_ten').innerHTML = "";
			}
		}


		let ngay_sinh = document.getElementById('ngay_sinh').value;
		if(ngay_sinh.length === 0 ){
			document.getElementById('loi_ngay_sinh').innerHTML = 'ngày sinh không được để trống';
			kiem_tra_loi = true;
		}else{
			document.getElementById('loi_ngay_sinh').innerHTML = "";
		}

		let mang_gioi_tinh = document.getElementsByName('gioi_tinh');
		let kiem_tra_gioi_tinh = false;
		for (let i = 0; i < mang_gioi_tinh.length; i++) {
			if (mang_gioi_tinh[i].checked) {
				kiem_tra_gioi_tinh = true;
			}
		}
		if(kiem_tra_gioi_tinh == false){
			document.getElementById('loi_gioi_tinh').innerHTML = 'giới tính không được để trống';
			kiem_tra_loi = true;
		}else{
			document.getElementById('loi_gioi_tinh').innerHTML = "";
		}

		let email = document.getElementById('email').value;
		if(email.length === 0 || email == '' ){
			document.getElementById('loi_email').innerHTML = 'email không được để trống';
			kiem_tra_loi = true;
		}else{
			let regex_email =/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/;
			if (regex_email.test(email)==false) {
				document.getElementById('loi_email').innerHTML = "Email không hợp lệ";
				kiem_tra_loi= true;
			}else{
				document.getElementById('loi_email').innerHTML = "";
			}
		}

		let sdt = document.getElementById('sdt').value;
		if(sdt.length === 0 ){
			document.getElementById('loi_sdt').innerHTML = 'số điện thoại không được để trống';
			kiem_tra_loi = true;
		}else{
			let phoneExp = /^(^\+251|^251|^0)?9\d{8}$/;
			if (regex_sdt.test(sdt)==false) {
				document.getElementById('loi_sdt').innerHTML = "Số điện thoại không hợp lệ";
				kiem_tra_loi= true;
			}else{
				document.getElementById('loi_sdt').innerHTML = "";
			}
		}

		let dia_chi = document.getElementById('dia_chi').value;
		if(sdt.length === 0 ){
			document.getElementById('loi_dia_chi').innerHTML = 'địa chỉ không được để trống';
			kiem_tra_loi = true;
		}else{
			document.getElementById('loi_dia_chi').innerHTML = "";
		}
		let mat_khau = document.getElementById('mat_khau').value;
		if(mat_khau.length === 0 ){
			document.getElementById('loi_mat_khau').innerHTML = 'mật khẩu không được để trống';
			kiem_tra_loi = true;
		}else if(mat_khau.length<8){
			document.getElementById('loi_mat_khau').innerHTML = "mật khẩu ngắn quá";
			kiem_tra_loi = true;
		}else{
			document.getElementById('loi_mat_khau').innerHTML = "";
		}

		if(kiem_tra_loi){
			return false;
		}
	}
</script>

</body>
</html>