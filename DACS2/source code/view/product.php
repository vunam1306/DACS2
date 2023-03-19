<?php
    include '../config/connect.php';
    ob_start();
    $sessionid = session_id();
    $proid = $_GET['productid'];
    $sql = "SELECT * FROM tbl_product WHERE productid = '$proid'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
    else {
        echo 'loi';
    }
    

    

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
  </style>
<?php include '../inc/header.php'?>
<body>
    <form action="" method="">
        <div class="product-detail">
            <div >
                <img src="../picture/<?php echo $row['image']?>" alt="" class="img-detail">
            </div>
            <div class="flex-colum">
            <div class="name-detail">
                    <p><?php echo $row['productname']?></p>
            </div>
            <div class="price-detail">
                    <p><?php echo format_currency($row['price'])?>.000 vnđ</p>
            </div>
            <div class="description" style="width: 620px; height: auto;">
                <p style="font-family:'Times New Roman', Times, serif" style="font-size:18px;"><?php echo $row['description']?></p>
            </div>
            </div>
        </div>
        
    </form>
    <form action="" method="post">
        <input class="quantity" type="number" name="quantity" value="1" min="1">
        <input class="order" type="submit" name="submit" value="Order Now!">
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
            $quantity = $_POST['quantity'];
            $sessionid = session_id(); 
            $sql = "INSERT INTO tbl_cart (productid,sessionid,productname,price,quantity,image) VALUE ('{$proid}','{$sessionid}','{$row['productname']}','{$row['price']}','{$quantity}','{$row['image']}')";
            if(mysqli_query($conn,$sql)){
                echo '<script>window.alert("Thêm vào giỏ hàng thành công!")</script>';
            } else {
                echo 'loi';
            }
        } 
        
        ?>
    </form>
</body>
<?php include '../inc/footer.php';?>
</html>