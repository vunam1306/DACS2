<?php
include '../config/connect.php';

$cart_id = $_GET['cartid'];

$sql = "DELETE FROM tbl_cart WHERE cartid = '$cart_id'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("XÓA SẢN PHẨM THÀNH CÔNG!")</script>';
    echo "<a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
?>