<?php
include '../config/connect.php';
 session_start();
 isset($_SESSION["username"]);
 $cartid = $_GET['cartid'];
 $sql = "SELECT * FROM tbl_account WHERE username = '{$_SESSION["username"]}'";
 $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row1 = mysqli_fetch_assoc($result);
    }
    else {
        echo 'loi';
    }




 $sessionid = session_id();
 $sql = "SELECT * FROM tbl_cart WHERE sessionid = '$sessionid'  ";
 $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $productid = $row['productid'];
            $productname = $row['productname'];
            $quantity = $row['quantity'];
            $price = $row['price'];
            $customerid = $row1['ID'];
            $customername = $_SESSION["username"];
            $phone = $row1['phone'];
            $image = $row['image'];
            $email = $row1['email'];
            $address = $row1['address'];
            $sql1 = "INSERT INTO tbl_order(productid,ID,productname,username,quantity,price,phone,email,address,image) VALUES('$productid','$customerid','$productname','$customername','$quantity','$price','$phone','$email','$address','$image')";
            if(mysqli_query($conn,$sql1)){
                 echo '<script>window.alert("ĐƠN HÀNG CỦA BẠN SẼ SỚM ĐƯỢC GIAO!")</script>';
                 echo "<a href='javascript: history.go(-1)'>Trở lại</a>";   
            }
        }
    }
    else {
        echo 'loi';
    }

?>