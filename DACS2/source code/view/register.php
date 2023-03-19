<?php

use function PHPSTORM_META\elementType;

  include '../config/connect.php';


 if(isset($_POST['dangki'])){

    $username   = addslashes($_POST['username']);
    $password   = addslashes($_POST['password']);
    $email      = addslashes($_POST['email']);
    $phone   = addslashes($_POST['phone']);
    $address   = addslashes($_POST['address']);


    if (!$username || !$password || !$email || !$phone || !$address)
    {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin!")</script>';
        echo "<a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $sql = "SELECT username FROM tbl_account WHERE username='$username' > 0";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
      echo '<script>alert("Tên đăng nhập đã được sử dụng!")</script>';
      echo "<a href='javascript: history.go(-1)'>Trở lại</a>";
      exit;
    }
    $sql = "INSERT INTO tbl_account (username,password,email,phone,address) VALUE ('{$username}','{$password}','{$email}','{$phone}','{$address}')";
    if(mysqli_query($conn,$sql)){
      echo '<script>alert("Đăng kí thành công! bây giờ bạn có thể đăng nhập!")</script>';
    } 
  }



  
  
    
  //   if(mysqli_query($conn,$sql)){
  //     echo '<script>alert("Sign Up Success!")</script>';
  //   } 
  // }
  // if (mysqli_num_rows(mysqli_query($conn,"SELECT username FROM tbl_account WHERE username='$username'")) > 0){
  //   echo '<script>alert("Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.")</script>';
  //   exit;
  // }


  // $sql = "INSERT INTO `tbl_account`( `username`, `password`, `email`, `phone`, `address`) VALUES ('$username','$password','$email','$phone','$address') WHERE 'id' > 3";
  // if(mysqli_query($conn,$sql)){
  //   echo '<script>alert("Sign Up Success!")</script>';
  // }
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
  .id {
    display: none;
  }
  </style>
</head>
<?php 
include '../inc/header.php'
?>
<div>
        <form action="" class="form-register" method="post">
            <!-- <div class="id">
                <input type="text" name="id">
            </div> -->
            <div class="register-username">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="register-pass">
                <input type="password" name="password" id="" placeholder="Password">
            </div>
            <div class="register-email">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="register-phone"> 
                <input type="text" name="phone" placeholder="Phone number">
            </div>
            <div class="register-address">
                <input type="text" name="address" placeholder="Address">
            </div>
            <div class="register-check">
                <input type="checkbox">
                <label for="" style="font-size: 14px;padding-left: 4px; margin-bottom: 3px;">Toi dong y voi dieu khoan va dich vu</label>
            </div>
            <div class="register-submit">
                <input type="submit" name="dangki" id="" value="Register">
            </div>
        </form>
        <div class="register-forgot">
          <a href="../view/login.php" target="_self">Login</a>
          <a href="../view/forgotpass.php">Forgot password</a>
        </div>
</div>
<?php
include '../inc/header.php';
?>
</html>
