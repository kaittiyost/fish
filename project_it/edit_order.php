 
  <?php
session_start();
require 'connect/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[Admin] KINGDOM FISH : อาณาจักรปลา</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
 <?php include 'header_admin.php';?>
    <div class="row"><!--content-->
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading0">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-user" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="false" aria-controls="collapse0">
              สมาชิก
            </a>
          </h4>
        </div>
        <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
          <div class="panel-body">
            <div class="list-group">
          <a href="show_user.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> ข้อมูลสมาชิก</button></a>
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-bookmark" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              ข่าวสาร
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
           <div class="list-group">
          <a href="show_announce.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> ข่าวสาร</button></a>
          <a href="insert_announce.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> เพิ่มประเภทข่าวสาร</button></a>
          <a href="insert_announceFull.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> เพิ่มข้อมูลข่าวสาร</button></a>
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-star" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              เกร็ดความรู้
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <div class="list-group">
          <a href="show_content.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> เกร็ดความรู้</button></a>
          <a href="insert_content.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> เพิ่มข้อมูลเกร็ดความรู้</button></a>
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-tag" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              สินค้า
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <div class="list-group">
          <a href="show_product.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> รายการสินค้า</button></a>
          <a href="insert_type_product.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> เพิ่มข้อมูลประเภทสินค้า</button></a> 
          <a href="insert_productFull.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> เพิ่มข้อมูลสินค้า</button></a> 
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-list-alt" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              รายการใบสั่งซื้อสินค้า
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
            <div class="list-group">
          <a href="show_order.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> รายการสั่งสินค้า</button></a>
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-barcode" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              รายการแจ้งชำระสินค้า
            </a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
            <div class="list-group">
          <a href="show_list.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> การแจ้งชำระสินค้า</button></a>
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-calendar" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              บันทึกการเลี้ยงปลา
            </a>
          </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
          <div class="panel-body">
            <div class="list-group">
              <a href="show_note.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> ตารางบันทึกการเลี้ยง</button></a>
              <a href="insert_note.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> เพิ่มข้อมูลบันทึกการเลี้ยง</button></a>
              <a href="insert_growth.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> บันทึกการเจริญเติบโต</button></a>
              <a href="insert_note_feed.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> บันทึกการให้อาหาร</button></a>
              <a href="insert_note_dead.php"><button type="button" class="list-group-item glyphicon glyphicon-save"> บันทึกการตาย</button></a>
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-transfer" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              เว็บบอร์ดคำถาม
            </a>
          </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
          <div class="panel-body">
            <div class="list-group">
          <a href="show_post.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> ข้อมูลคำถาม</button></a>
        </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingEight">
          <h4 class="panel-title">
            <a class="glyphicon glyphicon-transfer" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              เว็บบอร์ดคำตอบ
            </a>
          </h4>
        </div>
        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
          <div class="panel-body">
            <div class="list-group">
          <a href="show_comment.php"><button type="button" class="list-group-item glyphicon glyphicon-list-alt"> ข้อมูลคำตอบ</button></a>
        </div>
          </div>
        </div>
      </div>
          </div>
          </div>
          <br>
          <center>
          <h2>แก้ไขใบสั่งสินค้า</h2>
          <b>รายละเอียดข้อมูลรายการสั่งสินค้า สามารถเแก้ไขและลบข้อมูลได้</b>
          </center>
          <br>
          <div class="row">
            <div class="col-md-4">
               <br>
              <?php 
                $sel_list="select * from tb_orders where order_id=".$_GET['id']; 
                $rs_list=mysql_query($sel_list);
                $row_list=mysql_fetch_array($rs_list);
              ?>
              <form class="form-horizontal" id="form" name="form" method="post" action="update_order.php?id=<?php echo $_GET['id']; ?>"><br> 
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label">เลขที่ใบสั่งซื้อ</label>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" name="order_id" id="order_id" value="<?php echo $row_list['order_id']; ?>">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label">ชื่อ-นามสกุล</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="fullname" id="fullname" value="<?php echo $row_list['Fullname']; ?>">
                  </div>
                </div>               
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label">ที่อยู่</label>
                  <div class="col-sm-8">
                     <textarea name="address" id="address" placeholder="" cols="20" rows="4"><?php echo $row_list['address']; ?></textarea> 
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label">เบอร์ติดต่อ</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $row_list['phone']; ?>">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label">เลขบัตรเครดิต</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="card" id="card" value="<?php echo $row_list['card']; ?>">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label">ยอดชำระเงิน</label>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" name="order_total" id="order_total" value="<?php echo $row_list['order_total']; ?>">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label">สถานะชำระเงิน</label>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" name="order_status" id="order_status" value="<?php echo $row_list['order_status']; ?>">
                  </div>
                </div>

                 <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-12">
                      <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                      <button type="reset" class="btn btn-danger">ยกเลิก</button>
                    </div>
                  </div>
                <div class="page-header">
                </div>
               
            </br>
          </form> 
            </div>
            <br>
            <div class="col-md-4"><br>
              <form class="form-horizontal" id="form1" name="form1" method="post" action="#" enctype="multipart/form-data">
                <?php
                 $sql="select * from tb_payment a,tb_bank b where a.bank_id=b.bank_id and order_id=".$_GET['id']; 
                    $rs_list=mysql_query($sql);

                    $row_sh=mysql_fetch_array($rs_list);
                    ?>
              <table class="table" >
                  <tr> 

                        <!-- <td><b>เลขที่ใบสั่งซื้อ</b></td>  -->
                        <td align="center"><?php echo "<b>เลขที่ใบสั่งซื้อ : </b>".$row_sh['order_id'];?></a></td>    
                  </tr>     
                  <tr>        
                        <!-- <td><b>ภาพประกอบ</b></td>  -->
                        <td><a href="show_payment_order.php?id=<?php echo $row_sh['pm_id']; ?>"><img src="<?php echo $row_sh['pm_pic'];?>" width="350" height="350"></a></td>
                  </tr>        
                  <tr>               
                        <!-- <td><b>วันที่</b></td> -->
                        <td align="center"><?php echo "<b>วันที่ : </b>".$row_sh['pm_date'];?></td>
                  </tr>  
                  <tr>
                        <!-- <td><b>โอนเข้าธนาคาร : </b></td> -->
                        <td align="center"><?php echo "<b>โอนเข้าธนาคาร : </b>".$row_sh['bank_name'];?></td>
                  </tr>
              </table>
              </form>
               
            </div>
          </div>
          <center>
       <br>  
        <a href="show_order.php"><button type="button" class="btn btn-primary glyphicon glyphicon-circle-arrow-left"> ย้อนกลับ</button></a><br>
        </center>
        <br>
      </div>
    </div><!--content-->

<?php include 'footer.php';?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
	
