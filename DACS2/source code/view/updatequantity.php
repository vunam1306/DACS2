<?php
include '../config/connect.php';

$cart_id = $_GET['cartid'];
$quantity = $_POST['quantity'];
$sql = "UPDATE tbl_cart SET quantity = '$quantity' WHERE cartid = '$cart_id'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("UPDATE THÀNH CÔNG!")</script>';
    echo "<a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
?>  