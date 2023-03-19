<?php
  session_start();
  include '../config/connect.php';
  if($_SESSION["dangnhap"] = true){
    $_SESSION["username"] = $_SESSION["username"];
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
<header>
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
      

        <?php
        $sessionid = session_id();
        $sql = "SELECT COUNT(sessionid) AS quantitycart FROM tbl_cart WHERE sessionid = '$sessionid'";
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
</header>
</html>