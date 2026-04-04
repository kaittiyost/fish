 <!-- Database -->
 <?php
 session_start();
 error_reporting(0);
  include ('connect/connect.php');

  // $objchqty=mysqli_query($conn, "select * from tb_product");
  // while($rschqty=mysqli_fetch_array($objchqty)){
  //   $key=array_search($rschqty['p_id'], $_SESSION['cart']);
  //   if($_SESSION['qty'][$key]>$rschqty['p_number']){
  //     echo "<script>alert('สินค้าเกินจำนวนคงเหลือ');history.back();</script>";
  //     break;
  //   }
  // }
  $id=$_GET['id'];
    $sql_edit="select * from tb_user where user_id='$id'";
    $rs_edit=mysqli_query($conn, $sql_edit);
    $row_edit=mysqli_fetch_array($rs_edit);
    $id=$row_edit['user_id'];

if (isset($_SESSION['cart']))
{
    $itemIds = "";
    foreach ($_SESSION['cart'] as $itemId)
    {
        $itemIds = $itemIds . $itemId . ",";
    }
    $inputItems = rtrim($itemIds, ",");
    $meSql = "SELECT * FROM tb_product WHERE p_id in ({$inputItems})";
    $meQuery = mysqli_query($conn, $meSql);
    $meCount = mysqli_num_rows($meQuery);
    echo mysqli_error($conn);
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
   <?php include 'header.php';?>
   <br>
   <div class="row">
        <div class="col-md-12">
          <div class="container" align="center">
            <h1><img src="./img/cal.png" width="350" height="70"></h1>
          </div>
        </div>
    </div><br><br>

    <div class="row">
      <div class="container" align="center">
        <div class="col-md-12">
        <?php 
            $sql="select * from tb_user where user_id=".$_SESSION['user_id'];; 
            $rs_list=mysqli_query($conn, $sql);
            $row_sh=mysqli_fetch_array($rs_list);
         ?>

          <form class="form-horizontal" id="form1" name="form1" method="post" action="add_order.php?oid=<?php echo $_REQUEST['oid']; ?>">
                
                <div class="form-group form-group-sm">
                  <label class="col-sm-5 control-label">ชื่อ-นามสกุล</label>
                  <div class="col-sm-2">
                    <input class="form-control" type="text" name="fullname" id="fullname" value="<?php echo $_SESSION['uname']; ?>">
                  </div>
                </div>               
                <div class="form-group form-group-sm">
                  <label class="col-sm-5 control-label">ที่อยู่</label>
                  <div class="col-sm-1">
                     <textarea name="address" id="address" placeholder="" cols="20" rows="4"><?php echo $row_sh['address']; ?></textarea> 
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-5 control-label">เบอร์ติดต่อ</label>
                  <div class="col-sm-2">
                    <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $row_sh['phone']; ?>" >
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-5 control-label">บัญชีธนาคาร</label>
                  <div class="col-sm-2">
                    <input class="form-control" type="text" name="card" id="card" value="<?php echo $row_sh['card']; ?>" >
                  </div>
                </div>

                 <div class="form-group form-group-sm">
                <label class="col-sm-5 control-label"></label>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-success">ยืนยันการสั่งซื้อสินค้า</button>
                    
                 </div>
            </div>
                <div class="page-header">
                </div>
               
            </br>

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
              </tr> 
              <?php
                  $type=1;
                  $i=0; 
                  $total_price=0;
                  while($result = mysqli_fetch_array($meQuery)){
                  $key = array_search($result['p_id'], $_SESSION['cart']);
                  $total_price = $total_price + ($result['p_price'] * $_SESSION['qty'][$key]);
                ?>   
              <tr align="center">
                  <td><img src="<?php echo $result['p_pic']; ?>" style="width:150px; height: 100px;" class="img-rounded"></td>
                  <td>
                    <?php echo $result['p_name']; ?>
                      <input type="hidden" name="p_name" value="<?php echo $result['p_name']; ?>">
                      <input type="hidden" name="total" id="total" value="<?php echo $total_price-(($total_price*10)/100)+200; ?>">

                  </td>
                  <td>
                      <?php echo $result['p_price']; ?>

                  </td>
                  <td>
                  <?php if($result['category_id'] == 1){?>
                      <?php echo $_SESSION['qty'][$key]; ?>  ตัว
                    <?php } else{?>
                        <?php echo $_SESSION['qty'][$key]; ?>  กิโลกรัม
                    <?php } ?>

                      <input type="hidden" name="arr_key_<?php echo $i; ?>" value="<?php echo $key; ?>">
                        
                  </td>
                  <td id="total" style="color:orange;"><?php echo number_format(($result['p_price'] * $_SESSION['qty'][$key]),2); ?>&nbsp;บาท</td>
                 
                </tr>
                <?php $i++;
                } 
                ?>
                <tr> 
                </tr>
                <tr>
                  <td colspan="4" align="right"><br><b>รวมเป็นเงิน</b></td>
                  <td colspan="1" id="total" style="color:orange;" align="center"><br><b><?php echo $total_price-(($total_price*10)/100)+200; ?>&nbsp;บาท</b></td>
                </tr>
            
              </table>
              </form>
      </div>
      </div>
    </div>   
  <?php echo count($_SESSION['cart']); include 'footer.php';?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>


