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
            <h1><img src="./img/-season.png" width="350" height="70"></h1>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="container" align="center">
        <div class="col-md-12">
    <!--  <h2>รายละเอียดใบสั่งสินค้า</h2>  -->
              <form class="form-horizontal" id="form1" name="form1" method="post" action="#">
              <table width="900"><br>       
                    <?php
                        $sql=("select * from tb_orders where order_id=".$_REQUEST['oid']);
                        $rs1=mysql_query($sql);
                        $no=1;
                       $row_sh=mysql_fetch_array($rs1);
                       $order_total=$row_sh['order_total'];
                    ?>
                    <tr>
                      
                      <td colspan="3" width="700"><b>ชื่อ-นามสกุล : </b><?php echo $row_sh['Fullname'];?></td>
                      <td colspan="1" width="200" align="center"><b>เลขที่ใบเสร็จ :</b> <?php echo $row_sh['order_id'];?></td>
                    </tr>
                    <br>
                    <tr>
                      <td colspan="3"><b>ที่อยู่ : </b> <?php echo $row_sh['address'];?></td>
                      <td colspan="1" width="200" align="center"><b>วันที่ :</b> <?php echo $row_sh['order_date'];?></td>
                    </tr>
                    </table>
                    <br>
                    <table width="900" border="1">
                    <?php
                        $sql=("select * from tb_order_details where order_id=".$_REQUEST['oid']);
                        $rs1=mysql_query($sql);
                        $no=1;                       
                    ?>
                    <tr style="background-color: green;">
                      <td height="50" width="600" align="center"><b>รายการสินค้า</b></td>
                      <td height="50" width="100" align="center"><b>จำนวน</b></td>
                      <td height="50" width="100" align="center"><b>ราคาต่อหน่วย<br>(ตัว/กิโลกรัม)</b></td>
                      <td height="50" width="100" align="center"><b>ราคารวม</b></td>
                    </tr>
                    <?php 
                        while($row_sh=mysql_fetch_array($rs1)){
                          $objpro=mysql_query("select * from tb_product where p_id=".$row_sh['p_id']);
                          $rpro=mysql_fetch_array($objpro);                            
                    ?>
                    <tr>
                      <td width="600" align="center"><?php echo $rpro['p_name'];?></td>
                      <td width="100" align="center"><?php echo $row_sh['p_number'];?></td>
                      <td width="100" align="center"><?php echo $row_sh['p_price'];?></td>
                      <td width="100" align="center"><?php echo $row_sh['p_number']*$row_sh['p_price'];?></td>
                    </tr>
                     
                    <?php }?>
                    <tr class="success">
                      <td colspan="3" align="right"><b>ส่วนลด (10%)&nbsp;</b></td>
                      <td colspan="1" id="total" style="color:red;" align="center"><b><?php echo $order_total-(($order_total*10)/100); ?>&nbsp;บาท</b></td>
                    </tr>
                    <tr class="success">
                      <td colspan="3" align="right"><b>ค่าจัดส่ง (200 บาท)&nbsp;</b></td>
                      <td colspan="1" id="total" style="color:red;" align="center"><b><?php echo $order_total-(($order_total*10)/100)+200; ?>&nbsp;บาท</b></td>
                    </tr>
                   <tr class="success">
                      <td colspan="3" align="right"><b>รวมเป็นเงิน&nbsp;</b></td>
                      <td colspan="1" id="total" style="color:red;" align="center"><b><?php echo $order_total-(($order_total*10)/100)+200; ?>&nbsp;บาท</b></td>
                    </tr>
              </table>
              <br>
               
              </form>
             <!--  <div class="page-header"></div> -->

              <br>
               
              <button class="btn btn-primary glyphicon glyphicon-print" 
                type="button" onclick="openWin('show_report.php?oid=<?php echo $_REQUEST['oid'];?>')"> พิมพ์ใบเสร็จสินค้า</button>
              <button class="btn btn-success glyphicon glyphicon-question-sign" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <b> เงื่อนไขการซื้อสินค้า</b>
              </button><br>
                <div class="collapse" id="collapseExample">
                  <div class="well">
                    <img src="./img/payment-1.png" width="100%" height="100%">
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
    <br>
      </div>
    </div><!--content-->
  <?php include 'footer.php';?>

  
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  <script>
function openWin(url) {
    var myWindow = window.open(url, "ใบเสร็จ", "width=800, height=500");
    myWindow.opener.document.getElementById("demo").innerHTML =
    "A new window has been opened.";
}
</script>

  </body>
</html>


