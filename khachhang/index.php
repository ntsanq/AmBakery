<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiệm bánh AmBakery</title>
  <?php include 'thuvien.php'; ?>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  
  

  <?php 
  require  'connect.php' ;
  $sql_the_loai = "select * from the_loai";
  $result_the_loai = mysqli_query($connect, $sql_the_loai);
  ?>

  <?php 
  include 'header.php';
  ?>

  <?php 
  if (isset($_GET['tim_kiem'])) { 
    $tim_kiem = $_GET['tim_kiem'];?>
    <p>Bạn tìm "<?php echo "$tim_kiem" ?>"</p>
    <div class="product">
      <!-- <h1 class="product__heading">Thông tin tìm kiếm</h1> -->
      
      <?php
      $sql= "select * from san_pham where ten_san_pham like '%$tim_kiem%'";
      $result = mysqli_query($connect, $sql);
      foreach ($result as $row) {?>
        <div class="product_category">
          <div class="product__card">
            <div class="product__card--body">
              <div class="product__photo">
                <a href="mota/chitietsp.php?ma=<?php echo $row['ma'] ?>">
                  <img src="<?php echo $row['anh'] ?>" alt="">
                </a>
              </div>
              <div class="product__info">
                <div class="product__info--text">
                  <div class="group">
                    <h3>
                      <a href="mota/chitietsp.php?ma=<?php echo $row['ma'] ?>"><?php echo $row['ten_san_pham'] ?></a>
                    </h3>
                  </div>
                  <div class="price">
                    <span><?php echo $row['gia'] ?>đ</span>

                  </div>
                </div>
                <div class="product__cart">
                  <a href="giohang/add_to_cart.php?ma=<?php echo $row['ma'] ?>">
                    <button class="product__cart--btn">Add to cart</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  <?php }else{ ?>

    <!-- -------------------NỘI DUNG TẤT CẢ SẢN PHẨM--------------------------- -->
    <div class="container">
      <div class="banner">
        <img src="img/banner-1.jpg" alt="Pain perdu">
      </div>
      <main>

        <div class="product">
          <?php foreach ($result_the_loai as $tung_the_loai) {?>
            <h1 class="product__heading"><?php echo $tung_the_loai['ten_the_loai'] ?></h1>
            <div class="product_category">
              <!-------------------- card--------------->
              <?php 
              $ma=$tung_the_loai['ma'];
              $sql_san_pham = "select * from san_pham where ma_the_loai = '$ma'";
              $result_san_pham = mysqli_query($connect, $sql_san_pham);
              ?>
              <?php foreach ($result_san_pham as $tung_san_pham) {?>
                <div class="product__card">
                  <div class="product__card--body">
                    <div class="product__photo">
                      <a href="mota/chitietsp.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                        <img src="<?php echo $tung_san_pham['anh'] ?>" alt="">
                      </a>
                    </div>
                    <div class="product__info">
                      <div class="product__info--text">
                        <div class="group">
                          <h3>
                            <a href="mota/chitietsp.php?ma=<?php echo $tung_san_pham['ma'] ?>"><?php echo $tung_san_pham['ten_san_pham'] ?></a>
                          </h3>
                          <!-- <a href="mota/chitietsp.php?ma=<?php echo $tung_san_pham['ma'] ?>"><?php echo $tung_san_pham['mo_ta'] ?></a> -->
                        </div>
                        <div class="price">
                          <span><?php echo $tung_san_pham['gia'] ?>đ</span>

                        </div>
                      </div>
                      <div class="product__cart">
                        <a href="giohang/add_to_cart.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                          <button class="product__cart--btn">Add to cart</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </main>
    </div>

    <?php 
    include 'footer.php';
    ?>
  <?php } ?>
</body>
</html>