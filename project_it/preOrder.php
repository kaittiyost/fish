 <!-- Database -->
 <?php
 session_start();
 error_reporting(0);
  include ('connect/connect.php');


if (isset($_SESSION['cart']))
{
    $itemIds = "";
    foreach ($_SESSION['cart'] as $itemId)
    {
        $itemIds = $itemIds . $itemId . ",";
    }
    $inputItems = rtrim($itemIds, ",");
    $meSql = "SELECT * FROM tb_product WHERE p_id in ({$inputItems})";
    $meQuery = mysql_query($meSql);
    $meCount = mysql_num_rows($meQuery);
    echo mysql_error();
}

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
    <?php include 'header.php'; ?>
   <br>
   <div class="row">
        <div class="col-md-12">
          <div class="container" align="center">
            <h1><img src="./img/cal.png" width="350" height="70"></h1>
          </div>
        </div>
    </div><br>
    <div class="row">
      <div class="container" align="center">
        <div class="col-md-8">
        <form action="add_cart.php?action=qty" method="post">
          <table class="table table-condensed">
            <tr>
              <td colspan="6" style="background-color:orange;text-align:center;"><b>รายการสั่งซื้อ</b></td>
            </tr>
            <tr align="center" class="alert alert-warning">
                    <td>รูปสินค้า</td>
                    <td>สินค้า</td>
                    <td>ราคาสินค้า/หน่วย</td>
                    <td>จำนวน</td>
                    <td>จำนวนเงินรวม</td>
                    <td>ลบ</td>
              </tr> 
              <?php
                  $type=1;
                  $i=0; 
                  $total_price=0;
                  while($result = mysql_fetch_array($meQuery)){

                  $key = array_search($result['p_id'], $_SESSION['cart']);
                  $total_price = $total_price + ($result['p_price'] * $_SESSION['qty'][$key]);


                ?>   
              <tr align="center">
                  <td><img src="<?php echo $result['p_pic']; ?>" style="width:150px; height: 150px;" class="img-rounded"></td>
                  <td>
                    <?php echo $result['p_name']; ?>
                      <input type="hidden" name="p_name" value="<?php echo $result['p_name']; ?>">
                  </td>
                  <td>
                      <?php echo $result['p_price']; ?>

                  </td>
                  <td>
                  <?php if($result['category_id'] == 1){?>
                      <input type="text" name="qty[<?php echo $i;?>]" value="<?php echo $_SESSION['qty'][$key]; ?>" class="form-control" style="width: 60px;text-align: center;">  ตัว
                    <?php } else{?>
                        <input type="text" name="qty[<?php echo $i;?>]" value="<?php echo $_SESSION['qty'][$key]; ?>" class="form-control" style="width: 60px;text-align: center;">  กิโลกรัม
                    <?php } ?>
                      <br>คงเหลือ
                      <?php echo $result['p_number'];?>
                      <input type="hidden" name="arr_key_<?php echo $i; ?>" value="<?php echo $key; ?>">
                        
                  </td>
                  <td id="total" style="color:orange;"><?php echo number_format(($result['p_price'] * $_SESSION['qty'][$key]),2); ?>&nbsp;฿</td>
                  <td><a name="btnConfirm" value="Confirm"
                        onclick="return confirm('ต้องการลบรายการสินค้าหรือไม่ ?')"
                        href="add_cart.php?action=remove&id=<?php echo $result['p_id'];?>"><button class="btn" type="button" style="background-color:orange">ลบ</button></td>
                </tr>
                <?php $i++;
                } 
                ?>
                <tr>
                  <td colspan="6" align="right">
                    <input type="submit" class="btn btn-success" value="คำนวณราคาสินค้าใหม่"/>
                    
                  </td>
                </tr>
            
              </table>
              </form>
        </div>
        <div class="col-md-4">
        <h3 align="left">สรุปการสั่งซื้อ</h3><br>
          <table class="table table-hover">
            
              
            
            <tr>
              <td height="20">มูลค่าสินค้า</td>
              <td id="total" style="color:orange;"><?php echo $total_price; ?>&nbsp;฿</td>
            </tr>
             <tr>
              <td>ส่วนลด (10%)</td>
              <td id="total" style="color:orange;"><?php echo $total_price-(($total_price*10)/100); ?>&nbsp;฿</td>
            </tr>
            <tr>
              <td>ค่าจัดส่ง (200บาท)</td>
              <td id="total" style="color:orange;"><?php echo $total_price-(($total_price*10)/100)+200; ?>&nbsp;฿</td>
            </tr>
            <tr>
              <td><b>ยอดสุทธิ (รวมภาษีมูลค่าเพิ่ม)</b></td>
              <td id="total" style="color:orange;"><b><?php echo $total_price-(($total_price*10)/100)+200; ?>&nbsp;฿</b></td>
            </tr>
           
               
          </table>
          <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
              <div>
              <a href="order_detail.php"><button style="background-color:orange" type="submit" class="btn col-md-12">ดำเนินการชำระเงิน
              </button></a>
              </div>
              <?php }else {?>  
                <div>
              <a href="login.php"><button style="background-color:orange" type="#" class="btn col-md-12" onclick="add()">ดำเนินการชำระเงิน
              </button></a>
              </div>
              <?php } ?> 
        </div>
      </div>
    </div>
 <br>
   
  <?php include 'footer.php';?>

  <script>
    function add(){
      alert("กรุณ Login ก่อนทำรายการ !");
    }
  </script>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


