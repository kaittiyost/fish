 <?php 
  include ('connect/connect.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KINGDOM FISH : อาณาจักรปลา</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <?php include 'header.php';?>
   <br>
   <div class="row">
        <div class="col-md-12">
          <div class="container" align="center">
            <h1><img src="./img/in-fish.png" width="350" height="70"></h1>
          </div>
        </div>

    </div><br>

    <div class="row"><!--content-->
      <div class="container" align="center"> 
      <ul class="nav nav-tabs" style="border-color: red;">
          <li role="presentation" class="active"><a href="show_product_list.php"><b>รวมทั้งหมด</b></a></li>
          <li role="presentation"><a href="show_product1.php"><b>ลูกปลาพันธุ์ปลา</b></a></li>
          <li role="presentation"><a href="show_product2.php"><b>ประกอบอาหาร</b></a></li>
        </ul>
          <br>
        <?php $sql = mysql_query("select * from tb_product"); ?>    
        <div class="row">         
          <?php while($result = mysql_fetch_array($sql)) { ?>
          <div class="col-sm-4 col-md-3">
            <div class="thumbnail">
              <img src="<?php echo $result['p_pic']; ?>" style="width:350px; height: 150px;" class="img-rounded">
              <div class="caption">
                <h3><?php echo $result['p_name']; ?></h3>
                <p><?php echo "ราคา ".$result['p_price']." บาท"; ?></p>
                <p><a href="#" class="btn btn-danger" role="button">สั่งซื้อสินค้า</a></p>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </div><!--content-->
  <?php include 'footer.php';?>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>


