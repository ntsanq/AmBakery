<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiệm bánh AmBakery</title>
  <!-- GOOGLE FONT  -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap0" rel="stylesheet">
  <!-- FONTAWESOME  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <?php 
  include  'connect.php' ;
  $sql = "select * from san_pham";
  $result = mysqli_query($connect, $sql);
  
  // $sql_the_loai = "select * from san_pham";
  // $result_the_loai = mysqli_query($connect, $sql_the_loai);
  ?>
  
  <?php 
  include 'header.php';
  ?>

  <div class="container">
    <div class="banner">
      <img src="img/banner-1.jpg" alt="Pain perdu">
    </div>

    <main>
      <div class="product">
        <h2 class="product__heading">Popular</h2>
        <div class="product_category">

          <!------------------------ card in Popular------------------------------>
          <div class="product__card">
            <div class="product__card--body">
              <div class="product__photo">
                <a href="#">
                  <img src="img/product-1.jpg" alt="">
                </a>
              </div>
              <div class="product__info">
                <div class="product__info--text">
                  <div class="group">
                    <a href="#">Sweet-breads</a>
                  </div>
                  <h2>
                    <a href="">ABC</a>
                  </h2>
                  <div class="price">
                    <span>$15</span>
                  </div>
                </div>
                <div class="product__cart">
                  <button class="product__cart--btn">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product">
        <h2 class="product__heading">Breads</h2>
        <div class="product_category">
          <div class="product__card">
            <div class="product__card--body">
              <div class="product__photo">
                <a href="#">
                  <img src="img/product-1.jpg" alt="">
                </a>
              </div>
              <div class="product__info">
                <div class="product__info--text">
                  <div class="group">
                    <a href="#">Sweet-breads</a>
                  </div>
                  <h2>
                    <a href="">ABC</a>
                  </h2>
                  <div class="price">
                    <span>$15</span>

                  </div>
                </div>
                <div class="product__cart">
                  <button class="product__cart--btn">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="product__card">
            <div class="product__card--body">
              <div class="product__photo">
                <a href="#">
                  <img src="img/product-1.jpg" alt="">
                </a>
              </div>
              <div class="product__info">
                <div class="product__info--text">
                  <div class="group">
                    <a href="#">Sweet-breads</a>
                  </div>
                  <h2>
                    <a href="">ABC</a>
                  </h2>
                  <div class="price">
                    <span>$15</span>

                  </div>
                </div>
                <div class="product__cart">
                  <button class="product__cart--btn">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="product__card">
            <div class="product__card--body">
              <div class="product__photo">
                <a href="#">
                  <img src="img/product-1.jpg" alt=""> 
                </a>
              </div>
              <div class="product__info">
                <div class="product__info--text">
                  <div class="group">
                    <a href="#">Sweet-breads</a>
                  </div>
                  <h2>
                    <a href="">ABC</a>
                  </h2>
                  <div class="price">
                    <span>$15</span>

                  </div>
                </div>
                <div class="product__cart">
                  <button class="product__cart--btn">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="product__card">
            <div class="product__card--body">
              <div class="product__photo">
                <a href="#">
                  <img src="img/product-1.jpg" alt="">
                </a>
              </div>
              <div class="product__info">
                <div class="product__info--text">
                  <div class="group">
                    <a href="#">Sweet-breads</a>
                  </div>
                  <h2>
                    <a href="">ABC</a>
                  </h2>
                  <div class="price">
                    <span>$15</span>

                  </div>
                </div>
                <div class="product__cart">
                  <button class="product__cart--btn">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <!-- ------------------------------------------------------------------------ -->
        <h2 class="product__heading">Drinks</h2>
        <div class="product_category">

          <?php foreach ($result as $tung_san_pham) {?>
            <div class="product__card">
              <div class="product__card--body">
                <div class="product__photo">
                  <a href="#">
                    <img src="<?php echo $tung_san_pham['anh'] ?>" alt="">
                  </a>
                </div>
                <div class="product__info">
                  <div class="product__info--text">
                    <div class="group">
                      <a href="#"><?php echo $tung_san_pham['mo_ta'] ?></a>
                    </div>
                    <h2>
                      <a href=""><?php echo $tung_san_pham['ten_san_pham'] ?></a>
                    </h2>
                    <div class="price">
                      <span><?php echo $tung_san_pham['gia'] ?></span>

                    </div>
                  </div>
                  <div class="product__cart">
                    <button class="product__cart--btn">Add to cart</button>
                  </div>
                </div>
              </div>
          </div>
            <?php } ?>

        </div>
      </div>
    </main>
  </div>

  <?php 
  include 'footer.php';
  ?>
</body>
</html>