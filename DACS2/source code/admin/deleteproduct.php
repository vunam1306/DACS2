<?php
include '../config/connect.php';
$productid = $_GET['productid'];

$sql = "DELETE FROM tbl_product WHERE productid = '$productid'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("XÓA SẢN PHẨM THÀNH CÔNG!")</script>';
    echo "<a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

?>