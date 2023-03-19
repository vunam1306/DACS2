
  <!-- hiển thị tên người dùng -->
<?php
  session_start();
  include '../config/connect.php';
  if($_SESSION["dangnhap"] = true){
    $_SESSION["username"] = $_SESSION["username"];
  }
  
  
?>
  <!-- xu ly hien thi san pham -->
<?php
  include '../config/connect.php';
  isset($_GET['productid']);
  $sql = "SELECT * FROM `tbl_product`WHERE type = 'breakfast' order by 'productid' asc LIMIT 8 ";
  $result =  mysqli_query($conn,$sql);
  $product_display = array();
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
      $product_display[] = $row;
    }
  } else {
    echo 'loi';
  }


  $sql = "SELECT * FROM `tbl_product` WHERE type = 'lunch' order by 'productid' asc LIMIT 8 ";
  $result =  mysqli_query($conn,$sql);
  $product_display2 = array();
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
      $product_display2[] = $row;
    }
  } else {
    echo 'loi';
  }


  $sql = "SELECT * FROM `tbl_product` WHERE type = 'dinner' order by 'productid' asc LIMIT 8 ";
  $result =  mysqli_query($conn,$sql);
  $product_display3 = array();
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
      $product_display3[] = $row;
    }
  } else {
    echo 'loi';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../picture/logo.jpg">
  <title>YUMMY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/c  ss/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://kit.fontawesome.com/e8d567c6f5.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../CSS/index.css">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: auto;
    margin: auto;
  }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

  
   <div class="header">
    <nav>
      <div class="brand">  
        <a href="../view/clientview.php"><img class="img-logo" src="../picture/logo.jpg" alt="" width="100px" height="auto"></a>
      </div>
      <form action="search.php" class="input">
        <div class="search">
          <input type="search" name="search_inp" id="" placeholder="Search">
        </div>
        <div class="input-button">
          <button class="button" type="submit" name="search">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </form>
      <!-- dropdown -->



        <?php
        $sql = "SELECT COUNT(cartid) AS quantitycart FROM tbl_cart";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $quantitycart = mysqli_fetch_assoc($result);
        }
        else {
            echo 'loi';
        } 
        ?>

      <!-- shopping-cart -->
      <div class="shopping-cart"> 
        <button>
          <a href="../view/cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </button>
        <div>
            <label class="quantity-order" for=""><p><?php echo $quantitycart['quantitycart']?></p></label> 
        </div>
      </div>

      

      <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
          <h1 class="offcanvas-title"><b>YUMMY.</b></h1>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
        <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="../view/login.php"><p>Xin chao!,<?php echo $_SESSION["username"] ?></p></a></li>
          <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="#section1"><p>Menu</p></a></li>
          <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="#section2"><p>Book A Table</p></a></li>
          <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="../view/cart.php"><p>Shopping Cart</p></a></li>
          <li role="presentation" class="nav-item"><a class="nav-link" href=""></a></li>
          <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="#section5"><p>About Us</p></a></li>
        </div>
      </div>
      
      <div class="container-fluid mt-3">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
      
    </nav>
    
   </div>


 
    
    
  
    <script>
      // $(".dropdown-button").click(function(){
      // $(".dropdown-content").toggle();
      // });
    </script>
    
    <div class="slogan">
          <p class="slogan-content" style="color: white;">ENJOY YOUR MEAL!!!</p>
    </div>
  

  
  

<div class="container">
 
  <div id="myCarousel" class="carousel slide">
  

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.lifestyleasia.com/wp-content/uploads/sites/2/2020/06/01180312/HUE-hero.jpg?tr=w-1200,h-900" alt="Los Angeles" class="d-block" style="width: 100%">
      <div class="carousel-caption">
        <h3>River View</h3>
        <p>We had such a great view of Han river!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://cdn.vox-cdn.com/thumbor/OheW0CNYdNihux9eVpJ958_bVCE=/0x0:5996x4003/1200x900/filters:focal(1003x1633:1961x2591)/cdn.vox-cdn.com/uploads/chorus_image/image/51830567/2021_03_23_Merois_008.30.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Penthouse View</h3>
        <p>View Da Nang from above!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="https://optimise2.assets-servd.host/fine-elk/production/images/La-Bellezza-Big-Mamma-Restaurant-furniture-by-InsideOutContracts-040.jpg?w=1200&h=900&q=80&fm=webp&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5&dm=1562941748&s=ee33fea658d2b7a176b5f527f95d80d2" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>V.I.P Room</h3>
        <p>Romantic and cozy space!</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

<script>
</script>
</div>
</div>

 <!-- menu -->
 <div class="menu">
  <div id="section1">
    <p class="menu-heading">MENU</p>
  </div>
  
  <div class="menu-title">
    <p>Breakfast:</p>
  </div>
  
  <div class="product">
  <div class="scroll" id="style-scroll-bar" style="scroll-snap-type: x mandatory;">
  <?php
    if(!empty($product_display)) {
  ?>
    <?php foreach ($product_display as $item){
  ?>
    <div class="flex-product">
     <div class="img">
      <div class="product-image" style="scroll-snap-align: start">
        <a href="product.php?productid=<?php echo $item['productid']?>">
          <img src="../picture/<?php echo $item['image']?>"  class="img"  alt="Image">
              <div class="product-name">
                <p><?php echo $item['productname']?></p>
                <p><?php echo $item['price']?>.000 vnđ</p>
              </div>
        </a>
      </div>
     </div>
    </div>
    <?php
      }
    ?>
    <?php   
      }  
    ?>
    </div>
    </div>
   
  <div class="menu-title">
    <p>Lunch:</p>
  </div>

  <div class="product">
  <div class="scroll" id="style-scroll-bar" style="scroll-snap-type: x mandatory;">
  <?php
    if(!empty($product_display2)) {
  ?>
    <?php foreach ($product_display2 as $item){
  ?>
    <div class="flex-product">
     <div class="img">
      <div class="product-image" style="scroll-snap-align: start">
        <a href="product.php?productid=<?php echo $item['productid']?>">
          <img src="../picture/<?php echo $item['image']?>"  class="img"  alt="Image">
              <div class="product-name">
                <p><?php echo $item['productname']?></p>
                <p><?php echo $item['price']?>.000 vnđ</p>
              </div>
        </a>
      </div>
     </div>
    </div>
    <?php
      }
    ?>
    <?php   
      }  
    ?>
    </div>
    </div>

  
  <div class="menu-title">
      <p>Dinner:</p>
  </div>


  <div class="product">
  <div class="scroll" id="style-scroll-bar" style="scroll-snap-type: x mandatory;">
  <?php
    if(!empty($product_display3)) {
  ?>
    <?php foreach ($product_display3 as $item){
  ?>
    <div class="flex-product">
     <div class="img">
      <div class="product-image" style="scroll-snap-align: start">
        <a href="product.php?productid=<?php echo $item['productid']?>">
          <img src="../picture/<?php echo $item['image']?>"  class="img"  alt="Image">
              <div class="product-name">
                <p><?php echo $item['productname']?></p>
                <p><?php echo $item['price']?>.000 vnđ</p>
              </div>
        </a>
      </div>
     </div>
    </div>
    <?php
      }
    ?>
    <?php   
      }  
    ?>
    </div>
    </div>
 </div>

 <div class="booking">
      <div class="booking-title">
        <div id="section2">
          <p>Book A Table</p>
        </div>
      </div>
      <div class="booking-form">
        <div>
          <img src="../picture/bookingimg.jpg" alt="" class="img-form">
        </div>
        <form action="" class="booking-input">
          <div class="fullname">
            <input type="text" name="" id="" placeholder="Full name">
          </div>
          <div class="phone-number">
            <input type="text" name="" id="" placeholder="Phone number">
          </div>
          <div class="email">
            <input type="text" name="" id="" placeholder="Email">
          </div>
          <div class="date">
            <input type="text" name="" id="" placeholder="Date">
          </div>
          <div class="message">
            <input type="text" name="" id="" placeholder="Message">
          </div>
          <div class="submit">
            <input type="submit" name="" id="" value="Order Now!">
          </div>
        </form>
      </div>
 </div>

 <div class="about">
    <div class="about-title">
      <div id="section5">
        <p>About Us</p>
      </div>
    </div>
    <div class="about-inf">
      <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2966.5829762340513!2d108.24964675351045!3d15.9745097139949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1svku!5e1!3m2!1sen!2s!4v1667645991905!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div>
          <div class="flex-inf1">
            <div class="inf">
              <div class="icon-inf"><i class="fa-solid fa-map-location-dot"></i></div>
              <div class="inf-text">
                <p class="p1">Address</p><br>
                <p class="p2">470 Tran Dai Nghia, Ngu Hanh Son, Da Nang</p>
              </div>
            </div>
            <div class="inf">
              <div class="icon-inf"><i class="fa-solid fa-envelope"></i></div>
              <div class="inf-text">
                <p class="p1">Email</p><br>
                <p class="p2">namvp.21it@vku.udn.vn</p>
              </div>
            </div>
          </div>
          <div class="flex-inf2">
            <div class="inf">
              <div class="icon-inf"><i class="fa-solid fa-phone-volume"></i></div>
              <div class="inf-text">
                <p class="p1">Phone Number</p><br>
                <p class="p2">0867077565</p>
              </div>
            </div>
            <div class="inf">
              <div class="icon-inf"><i class="fa-solid fa-clock"></i></i></div>
              <div class="inf-text">
                <p class="p1">Opening Hours</p><br>
                <p class="p2">Mon-Sun:8AM-23PM</p>
              </div>
            </div>
          </div>
      </div>
    </div>

 </div>

 <div class="footer">
    <div class="text-footer">
      <p>Follow Us</p>
    </div>
    <div class="icon-footer">
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-telegram"></i>
    </div>
    <div class="copyright">
      <div class="copyright-icon">
        <i class="fa-regular fa-copyright"></i>
      </div>
      <div class="copyright-text">
        <p>Copyright Yummy. All Rights Reserved</p>
      </div>
    </div>
</div>

<!-- <script>
  $(".left").click(function(){
  $("#arrow").carousel("left");
  });
  $(".right").click(function(){
    $("#arrow").carousel("next");
  });
</script> -->

 
 
  



</body>
</html>
