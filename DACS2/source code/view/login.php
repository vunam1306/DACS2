<?php
  session_start();

  header('Content-Type: text/html; charset=UTF-8');

  isset($_SESSION['dangnhap']);


  // ket noi co so du lieu
  include '../config/connect.php';

  if(isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `tbl_account` WHERE `username` = '$username' AND `password` = '$password' ";
    $result = mysqli_query($conn, $sql);
    if(!$row = mysqli_fetch_assoc($result)) {
 
      echo '<script>alert("YOUR USERNAME OR PASSWORD IS INCORRECT!")</script>';
  
    } else {
      if ($row['ID'] == 1) {
          header("location:../admin/admin.php");    
      } else {
        $_SESSION["dangnhap"] = true;
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
        header("location:../view/clientview.php");
      }
    } 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../picture/logo.jpg">
    <title>YUMMY</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e8d567c6f5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../CSS/index.css">
    <style>
    .btn {
    margin-left: 296px;
    position: relative;
    left: -140px;
    top: 24px;
    border: 0px solid transparent;
    }
    </style>
</head>
<body>
    <div class="header">
        <nav>
          <div class="brand">  
            <a href="../view/index.php"><img class="img-logo" src="../picture/logo.jpg" alt="" width="100px" height="auto"></a>
          </div>
          <form action="" class="input">
            <div class="search">
              <input type="search" name="search" id="" placeholder="Search">
            </div>
            <div class="input-button">
              <button class="button" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </form>
        
          <!-- shopping-cart -->
          <div class="shopping-cart"> 
            <button>
              <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </button>
          </div>
    
       
    
          <div class="offcanvas offcanvas-start" id="demo">
            <div class="offcanvas-header">
              <h1 class="offcanvas-title"><b>YUMMY.</b></h1>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
              <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="#section1"><p>Menu</p></a></li>
              <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="#section2"><p>Book A Table</p></a></li>
              <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="#section3"><p>Login</p></a></li>
              <li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" tabindex="-1" href="#section4"><p>Shopping Cart</p></a></li>
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
       <div>
        <form action="login.php" class="form-login" method="post">
            <div class="login-username">
                <input type="text" name="username" placeholder="Username">
            </div>  
            <div class="login-pass">
                <input type="password" name="password" id="" placeholder="Password">
            </div>
            <div class="login-check">
                <input type="checkbox">
                <label for="" style="font-size: 14px;padding-left: 4px; margin-bottom: 3px;">Remember my password</label>
            </div>
            <br>
            <?php if (isset($_POST['btn-login'])) {
                if (!empty($error)) {
                echo $error;
                }
              } 
              ?>
            <div class="login-submit">
                <input type="submit" name="dangnhap" id="" value="Login">
            </div>
        </form>
        <div class="register-forgot">
          <a href="../view/register.php">Creat a new account</a>
          <a href="../view/forgotpass.php">Forgot password</a>
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
</body>
</html>