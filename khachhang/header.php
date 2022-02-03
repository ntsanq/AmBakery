<header>
  <div class="header__left">
    <div class="header__search">
      <form>
        <input type="text" name="tim_kiem">
        <button type="submit" class="btn header__search__btn" >
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
  </div>
  <div class="header__middle">
    <a href="index.php" class="header__logo">
      <span><b>am</b>bakery</span>
    </a>
  </div>

  <div class="header__right">
    <div class="header__cart">
      <a href="giohang">
        <i class="fas fa-shopping-bag"></i>
        <span>
          <?php 
          if (isset($_SESSION['cart'])) {
            $tong = 0;
            $times = sizeof($_SESSION['cart']);
            $cart = $_SESSION['cart'];
            foreach ($cart as $ma => $tung_san_pham) {
              $tong += $_SESSION['cart'][$ma]['so_luong'];
            }
            echo $tong;
          }elseif (!isset($_SESSION['cart'])) {
            echo 0;
          }
          
          ?>
        </span>
      </a>
    </div>
    <div class="vertical-line"></div>


    <div class="dropdown">
      <?php 
      if (!isset($_SESSION['ma_kh'])) {
        $link = 'login.php';
      }else{
        $link = '#';
      }
      ?>
      <button class="dropbtn header__login" onclick="location.href='<?php echo $link ?>'">
        <?php 
        if (isset($_SESSION['ma_kh'])) {

          $ma=$_SESSION['ma_kh'];
          $sql = "select ten from khach_hang where ma = '$ma'";
          $result=  mysqli_query($connect, $sql);
          $row = mysqli_fetch_array($result);

          $ten =  $row['ten'];
          $part = explode(' ', $ten);
          $name_last = array_pop($part);
          echo $name_last;
        }else{
          echo "Log in";
        }
        ?>
        <i class="far fa-user"></i>
      </button>
      <?php
      if (isset($_SESSION['ma_kh'])) {?>
        <div class="dropdown-content">
          <a href="lichsu">Lịch sử mua hàng</a>
          <a href="logout_process.php">Đăng xuất <!-- <i class="fas fa-sign-out-alt"></i> --></a>
        </div>
      <?php } ?>
    </div>

  </div>
</header>