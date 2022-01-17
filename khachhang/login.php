<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập Khách hàng</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
    <!-- <div id="frm">
        <p id="login">LOGIN</p>        

        <form action="login_process.php" method="POST">
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" style=" margin-left: 30px;" >
            </p>
            <p>
                <label for="mat_khau" >Mật khẩu:</label>
                <input type="password" name="mat_khau" id="mat_khau" style=" margin-left: 5px;">
            </p>
            <p>
                <input type="checkbox" name="ghi_nho" >
                <label for="ghi_nho"> Ghi nhớ tôi</label>
            </p>
            <p>
                <input type="submit" id="btn" value="Đăng nhập" >
            </p>
            <a href="../khachhang/dangky_khachhang/signup.php" style="font-size: 15px;">>>Bạn chưa có tài khoản?</a>
        </form>
    </div> -->

    <div id="frm">
        <div>
            <div>
                <p id="login">LOGIN</p>
            </div>
            <div>
                <form action="login_process.php" method="POST">
                    <table>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input type="text" name="email" id="email" size="23">
                            </td>
                        </tr>
                        <tr>
                            <td>Mật khẩu:</td>
                            <td>
                                <input type="password" name="mat_khau" id="mat_khau" size="23">
                            </td>
                        </tr>
                    </table>
                    <button type="submit" id="btn">Đăng nhập</button>
                </form>
            </div>
            <div>
                <a href="../khachhang/dangky_khachhang/signup.php" style="font-size: 15px;">>>Bạn chưa có tài khoản?</a>
            </div>
        </div>
    </div>
</body>
</html>