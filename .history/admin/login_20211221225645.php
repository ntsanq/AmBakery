<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
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
    </header>
    <div id="frm">
        <p href="" align="center">
            <img src="./image/adicon.jpg" height="30px" >
        </p>
        <p id="login">LOGIN</p>        

        <form action="process.php" method="POST">
            <p>
                <label for="ma">Mã NV:</label>
                <input type="text" name="ma" id="ma" style=" margin-left: 24px;" size="20">
            </p>
            <p>
                <label for="mat_khau" >Mật khẩu:</label>
                <input type="password" name="mat_khau" id="mat_khau" style=" margin-left: 5px;">
            </p>
            <p>
                <input type="submit" id="btn" value="Đăng nhập">
            </p>
        </form>
    </div>
</body>
</html>