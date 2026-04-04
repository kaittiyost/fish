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
    <title>ใบเสร็จสินค้า</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   
    <div class="row">
      <div class="container" align="center">
        <div class="col-md-12">
    <!--  <h2>รายละเอียดใบสั่งสินค้า</h2>  -->
              <form class="form-horizontal" id="form1" name="form1" method="post" action="#">
              <table width="900"><br>       
                    <?php
                        $sql=("select * from tb_orders where order_id=".$_REQUEST['oid']);
                        $rs1=mysqli_query($conn, $sql);
                        $no=1;
                       $row_sh=mysqli_fetch_array($rs1);
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
                        $rs1=mysqli_query($conn, $sql);
                        $no=1;                       
                    ?>
                    <tr style="background-color: green;">
                      <td height="50" width="600" align="center"><b>รายการสินค้า</b></td>
                      <td height="50" width="100" align="center"><b>จำนวน</b></td>
                      <td height="50" width="100" align="center"><b>ราคาต่อหน่วย<br>(ตัว/กิโลกรัม)</b></td>
                      <td height="50" width="100" align="center"><b>ราคารวม</b></td>
                    </tr>
                    <?php 
                        while($row_sh=mysqli_fetch_array($rs1)){
                          $objpro=mysqli_query($conn, "select * from tb_product where p_id=".$row_sh['p_id']);
                          $rpro=mysqli_fetch_array($objpro);                            
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
              <table width="900" border="1">
                <tr>
                  <h3>ช่องทางการชำระเงิน</h3>
                </tr>
                <tr align="center">
                  <td><b>LOGO</b></td>
                  <td><b>ชื่อธนาคาร</b></td>
                  <td><b>เลขบัญชี</b></td>
                </tr>
                <tr>
                  <td width="150" height="30" align="center"><img src="./img/KTB.png" width="50" height="50"></td>
                  <td width="600">&nbsp;<b>ธนาคารกรุงไทย</b></td>
                  <td width="150" align="center"><b>2930379057</b></td>
                </tr>
                <tr>
                  <td width="50" height="30" align="center"><img src="./img/nm.png" width="50" height="50"></td>
                  <td width="700">&nbsp;<b>ธนาคารกสิกรไทย</b></td>
                  <td width="150" align="center"><b>2930379057</b></td>
                </tr>            
              </table>
              <br>
              <table>
                <tr>
                  <td align="left" colspan="3">
                    <b>***ท่านต้องชำระเงินหลังจากการสั่งซื้อสินค้าได้ไม่เกิน 7 วัน ถ้าเกิดสินค้าที่สั่งจำถูกยกเลิก นับวัน-เวลาหลังจากการกดสั่งซื้อ</b>
                  </td>
                </tr>
              </table>
                <br>
              </form>
              <br> 
              <button class="btn btn-primary glyphicon glyphicon-print" 
                type="button" onclick="window.print()"> พิมพ์ใบเสร็จสินค้า</button>
                <br>
              </div>
            </div>
          </div>
  </body>
</html>


