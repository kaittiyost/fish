 <?php 
  include ('connect/connect.php');
  session_start();
  $id=$_GET['id'];


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
            <h1><img src="./img/cal.png" width="350" height="70"></h1>
          </div>
        </div>

    </div><br>

    <div class="row"><!--content-->
      <div class="container" align="center"> 
       <?php
              $sql = mysqli_query($conn, "select * from tb_product where p_id=".$id); 
              $result = mysqli_fetch_array($sql);
             
            ?>
        <form name="f1" action="preOrder.php" method="post">
          <table class="table table-bordered" border="1">
          <tr align="center" style="background-color:orange">
            <td><b>รูปสินค้า</b></td>
            <td><b>สินค้า</b></td>
            <td><b>ราคาสินค้า/หน่วย</b></td>
            <td width="9%"><b>จำนวน</b></td>
            <td width="10%"><b>คำนวน</b></td>
           
          </tr>
          
           <tr align="center">
            <td><img src="<?php echo $result['p_pic']; ?>" style="width:150px; height: 150px;" class="img-rounded"></td>
            <td>
            <?php echo $result['p_name']; ?>
              <input type="hidden" name="p_name" value="<?php echo $result['p_name']; ?>">
            </td>
            <td>
            <?php echo $result['p_price'];?>
            <input type="hidden" name="p_price" value="<?php echo $result['p_price'];?>">
            </td>
            <td>
                <input type="text" class="form-control" id="cal" name="cal" <?php if($result['category_id'] == 1){?> placeholder="ตัว" <?php } ?><?php if($result['category_id'] == 2){?>  placeholder="กิโลกรัม" <?php } ?> >
                
            </td>
            <td align="center" >
                <div style="background-color:green" class="cal btn col-md-12" id="btnCal"><b>คำนวนราคาสินค้า</b></div>
                <!-- <button type="submit" class="btn btn-primary">OK</button> -->
              </td>
            
          </tr>
        </table>
        </form>

            <!-- <div class="cal btn btn-info col-md-12" align="right" id="btnCal">ซื้อสินค้า</div> -->
          <br>
        </div>
      </div>
    </div><!--content-->
  <?php include 'footer.php';?>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  
  <script type="text/javascript">
      $('#btnCal').click(function call() {
        var id = <?php echo $result['p_id'] ?>;
        var vals =  $("#cal").val();
        if ($('#1')) {
          var fish = <?php echo $result['p_price']?>;
          fish=fish*vals;  
        }else if ($('#2')) {
          var fish = <?php echo $result['p_price']?>;
          fish=fish*vals;  
        }
        $("#total").text(fish+" ฿");
        window.location.href = "add_cart.php?id="+id+"&buy=" + vals;
      });

  </script>
  </body>
</html>


