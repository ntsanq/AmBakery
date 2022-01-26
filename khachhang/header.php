<header>
  <div class="header__left">
    <div class="header__search">

      <input type="text">
      <button class="btn header__search__btn">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
  <div class="header__middle">
    <a href="#" class="header__logo">
      <span><b>am</b>bakery</span>
    </a>
  </div>

  <div class="header__right">
      <div class="header__cart">
        <a href="giohang">
          <i class="fas fa-shopping-bag"></i>
          <span>
            <?php 
              $tong = 0;
              $times = sizeof($_SESSION['cart']);
              $cart = $_SESSION['cart'];
              foreach ($cart as $ma => $tung_san_pham) {
                $tong += $_SESSION['cart'][$ma]['so_luong'];
              }
              echo $tong;
            ?>
          </span>
        </a>
      </div>
      <div class="vertical-line"></div>
      <a href="login.php" class="header__login">

        <span>
          <?php 
          if (isset($_SESSION['ten_kh'])) {
             $ten = $_SESSION['ten_kh'];
             $part = explode(' ', $ten);
             $name_last = array_pop($part);
             echo $name_last;
          }else{
            echo "Log in";
          }
        ?>
        </span>
        
        <i class="far fa-user"></i>
      </a>
      <?php 
      if (isset($_SESSION['ten_kh'])) {?>
       <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
     <?php } ?>

   </div>
 </header>