<?php
    @include '../inc/header.php';
    include '../config/connect.php';
    $sessionid = session_id();
    $sql = "SELECT * FROM `tbl_cart` WHERE `sessionid` = '$sessionid'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          $cart_product[] = $row;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
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

  .footer {
    margin-top: 0 !important;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    height: 200px;
}
  </style>
<body>



    <table style="width:100%; color:white; text-align: center; margin-top: 40px; font-size: 20px;">
    <tr>
            <th style="font-family: Bahnschrift Light;" width="35%" colspan="2">Sản phẩm</th>
            <th style="font-family: Bahnschrift Light;" width="10%">Đơn giá</th>
            <th style="font-family: Bahnschrift Light;" width="24%">Số lượng</th>
            <th  style="font-family: Bahnschrift Light;"width="18%">Số tiền</th>
            <th style="font-family: Bahnschrift Light;" width="25%" >Thao tác</th>
    </tr>
    </table>
    <?php
    if(!empty($cart_product)) {
     ?>
    <?php foreach ($cart_product as $item){
    ?>
    
     <!-- cart-product  -->
    <div class="cart-product" style="padding-top:110px;">
    <table style="color: white; border:1px solid white; margin-left: 40px; margin-right: 40px; ">
        <tr>
            <th width="15%"></th>
            <th width="20%"></th>
            <th width="10%"></th>
            <th width="25%"></th>
            <th width="20%"></th>
            <th width="10%"></th>
        </tr>
        <tr>
            <td align="center"><img style="width:100%;" src="../picture/<?php echo $item['image']?>" alt=""></td>
            <td align="center"><?php echo $item['productname']?></td>
            <td align="center"><?php echo format_currency($item['price']) ?>.000<sup>đ</sup></td>
            <td align="center">
              <form action="updatequantity.php?cartid=<?php echo $item['cartid']?>" method="post">
              <input class="quantity-product" type="number" name="quantity" value="<?php echo $item['quantity']?>" min ="1"/>
              <input type="submit" name="submit" id="" value="update">
              </form>
              <?php
              // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'] )){
              //   $cart_id = $item['cartid'];
              //   $quantity =  $_POST['quantity'];
              //   $sql = "UPDATE tbl_cart SET quantity = '$quantity' WHERE cartid = '$cart_id' ";
              //   if(mysqli_query($conn,$sql)){
              //     echo '<script>alert("Cap nhat thanh cong!")</script>';
                  
              //   }
              // }
              ?>
            </td>
            <td align="center"><?php echo $item['price']*$item['quantity']?>.000<sup>đ</td>
            <td align="center"><a style="color:white;" href="deletecart.php?cartid=<?php echo $item['cartid']?>">Xóa</a></td>
        </tr>
    </table>
    </div>

    <?php
      }
    ?>
    <?php   
      }  
    ?>


     <!-- amount-checkout  -->
     <?php 
      $sql = "SELECT SUM(price*quantity) AS total FROM tbl_cart WHERE `sessionid` = '$sessionid' ";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          $total = mysqli_fetch_assoc($result);
      }
      else {
          echo 'loi';
      }
      ?>
    <div class="amount-checkout">
      <form action="order.php?cartid=<?php echo $item['cartid']?>" method="post">
      <div class="amount">
      <label for="" style="font-family: Bahnschrift Light; font-size:25px;">TỔNG THANH TOÁN (.. SẢN PHẨM):</label>
      <label for="" style="font-family: Bahnschrift Light; font-size:25px;"><?php echo format_currency($total['total'])?>.000 vnđ</label> 
      </div>
      <div class="checkout">
      <input  type="submit" name="muahang" id="" value="Mua hàng">
      </div>
      </form>
    </div>
    <?php
      function format_currency($n=0){
      $n=(string)$n;
      $n=strrev($n);
      $res='';
      for($i=0;$i<strlen($n);$i++){
          if($i%3==0 && $i!=0){
              $res.='.';
          
          }
          $res.=$n[$i];
      }
      $res=strrev($res);
      return $res;
    }
    ?>
</body>
<?php include '../inc/footer.php';?>
</html>