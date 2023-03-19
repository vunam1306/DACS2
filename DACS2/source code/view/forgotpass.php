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
    left: -148px;
    top: 25px;
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
          <!-- dropdown -->
    
          <!-- <div class="dropdown"> -->
            <!-- <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa-solid fa-bars"></i>
            <span class="caret"></i></span></button> -->
            
              <!-- <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Menu</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Login</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shopping cart</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
              </ul> -->
            
          <!-- </div> -->
    
          <!-- shopping-cart -->
          <div class="shopping-cart"> 
            <button>
              <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </button>
          </div>
    
          <!-- <div class="dropdown">
            <button class="dropdown-button"><i class="fa-solid fa-bars"></i></button>
            <ul class="dropdown-content">
              <li>Menu</li>
              <li>Login</li>
              <li>Shopping Cart</li>
              <li>About Us</li>
            </ul>
          </div> -->
          
    
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
       <div class="forgot">
        <form action="" class="form-forgot">
            <div class="forgot-email">
                <input type="text" name="username" placeholder="Your Email">
            </div>
            <div class="forgot-submit">
                <input type="submit" name="" id="" value="Reset my password">
            </div>
        </form>
        <div class="register-forgot">
          <a href="../view/login.php">Login</a>
          <a href="../view/register.php">Creat a new account</a>
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