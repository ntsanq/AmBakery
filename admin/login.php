<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
</head>
<body>

    <header>
        <div id="header">
            <a href="#" class="header__logo" >
                <span><b>am</b>bakery</span>
            </a>
        </div>
      <!--   <div class="header_chuyen_KH">
            <a href="../khachhang/index.php">to trang khách hàng</a>
        </div> -->
    </header>
    <div id="frm">
        <p href="" align="center">
            <img src="./image/adicon.png" height="30px" >
        </p>
        <p id="login">LOGIN</p>        

        <form action="process.php" method="POST">
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" style=" margin-left: 30px;" >
            </p>
            <p>
                <label for="mat_khau" >Mật khẩu:</label>
                <input type="password" name="mat_khau" id="mat_khau" style=" margin-left: 5px;">
            </p>
            <p>
                <input type="submit" id="btn" value="Đăng nhập" >
            </p>
            <a href="../khachhang/dangky_khachhang/signup.php" style="font-size: 15px;">>>Đăng ký khách hàng mới</a>
        </form>
    </div>
</body>
</html>