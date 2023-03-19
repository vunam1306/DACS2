<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include'../inc/header.php';?>
<body>
        <?php
        include '../config/connect.php';
        isset($_REQUEST['search']);
        $search_inp = $_REQUEST['search_inp'];
        $sql = "SELECT * FROM `tbl_product`WHERE LOWER (productname) LIKE '%$search_inp%'";
        $result =  mysqli_query($conn,$sql);
        $search_result = array();
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)) {
            $search_result[] = $row;
          }
        } else {
          echo 'loi';
        }
        ?>
        <?php
        
        ?>

        <?php if(!empty($search_result)){?>
        <?php foreach ($search_result as $item){ ?>

<form action="" method="">
        <div class="product-detail">
            <div >
                <img src="../picture/<?php echo $item['image']?>" alt="" class="img-detail">
            </div>
            <div class="flex-colum">
            <div class="name-detail">
                    <p><?php echo $item['productname']?></p>
            </div>
            <div class="price-detail">
                    <p><?php echo $item['price']?>.000 vnđ</p>
            </div>
            <div class="description" style="width: 620px; height: auto;">
                <p style="font-family:'Times New Roman', Times, serif" style="font-size:18px;"><?php echo $item['description']?></p>
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
            $sql = "INSERT INTO tbl_cart (productid,productname,price,quantity,image) VALUE ('{$item['productid']}','{$item['productname']}','{$item['price']}','{$quantity}','{$item['image']}') ";
            if(mysqli_query($conn,$sql)){
                echo '<script>window.alert("Them vao gio hang thanh cong!")</script>';
            } else {
                echo 'loi';
            }
        } 
        ?>
    </form>
    <?php } ?>
    <?php }?>
</body>
<?php include'../inc/footer.php';?>
</html>