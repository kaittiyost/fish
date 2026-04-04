 
  <?php
session_start();
require 'connect/connect.php';
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include Required Prerequisites -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
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
          <div class="col-md-9">
            <h2>ใบสั่งสินค้า</h2>
              <b>รายละเอียดข้อมูลรายการสั่งสินค้า สามารถเแก้ไขและลบข้อมูลได้</b>
               <br>
               <?php 
                      $num=0;
                        $sql=mysql_query("SELECT * FROM tb_orders");
                        while ($order=mysql_fetch_array($sql)) {
                          $num=$num+$order['order_total'];
                        }

                       ?>
                       <br>
                      <table class="table">
                        <tr class="success">
                          <td><b>สรุปยอดการสั่งซื้อทั้งหมด</b></td>
                          <td align="left"><b><?php echo $num." บาท"; ?></b></td>
                        </tr>
                      </table>
                      <br>
                      <center>

                       <form class="" action="show_order.php" method="post">
                          <table>
                            <tr>
                              <td>
                                  <b>ปี/เดิอน/วัน : &nbsp;</b>
                              </td>
                              <td>
                                  <input class="form-control" type="search" name="search" placeholder="2016-01-01">
                              </td>
                             <!--  <td>
                                  <b>&nbsp;&nbsp;วันที่ : &nbsp;</b>
                              </td>
                              <td>
                                <input class="form-control" type="date" name="daterange" >
                               <input class="form-control" type="datefilter" name="datefilter" value="01/01/2016 - 01/31/2016" />
 
                                  
                              </td> -->
                              <td>
                                  <input class="btn btn-info" type="submit" name="name" value="ค้นหา">
                              </td>
                            </tr>
                          </table>
                      </form>

                  <br>
                <br>
                </center>
  
        <?php 
        // OR order_date LIKE '%$search%'
          $search=$_POST['search'];
          $sql = mysql_query("SELECT * FROM tb_orders a,tb_payment b  WHERE a.order_id=b.order_id AND a.order_date LIKE '%$search%'   ORDER BY a.order_id"); 
          $num=mysql_num_rows($sql);
          if($num!=0){
        ?>    
        <a href="show_detail.php"><button type="button" class="btn btn-success glyphicon glyphicon-list-alt"> รายการสั่งสินค้าทั้งหมด</button></a><br>
            <table class="table"><br>
                  <tr  align="center" class="success"> 
                        <td><b>เลขที่ใบสั่งซื้อ</b></td>                   
                        <td><b>วันที่สั่ง</b></td>                        
                        <td><b>ชื่อ-สกุล</b></td>
                        <td><b>ใบเสร็จการโอน</b></td>
                        <td><b>สถานะ ชำระเงิน</b></td>
                        <td><b>แก้ไข</b></td>
                        <td><b>ลบ</b></td>
                  </tr>
                    <?php
                       while($row_sh=mysql_fetch_array($sql)){
                    ?>
                  <tr align="center">
                        <td><?php echo $row_sh['order_id'];?></a></td>
                        <td><?php echo $row_sh['order_date'];?></td>
                        <td><a href="show_orderDetail.php?id=<?php echo $row_sh['order_id']; ?>"><?php echo $row_sh['Fullname'];?></a></td>
                        <td><img src="<?php echo $row_sh['pm_pic'];?>" width="50" height="50"></td>
                        <td><?php echo $row_sh['order_status'];?></td>
                        <td width="30"><a class="glyphicon glyphicon-cog" href="edit_order.php?id=<?php echo $row_sh['order_id'];?>"></a></td>
                        <td width="30"><a class="glyphicon glyphicon-trash"  name="btnConfirm" value="Confirm" 
                          onclick="return confirm('ต้องการลบหรือไม่ ?')" 
                          href="delete_order.php?id=<?php echo $row_sh['order_id'];?>">
                        </td>
                  </tr>
                  <?php }?>
              </table>
        <?php } 
          else {
        ?>
         <tr>
            <td colspan="4" align="center"><h4>ไม่พบข้อมูลที่ค้นหา!</h4></td>
          </tr>
          <?php } ?>

          

          </div>
        </div>
      </div>
    </div><!--content-->

<?php include 'footer.php';?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <script type="text/javascript">
    $('input[name="daterange"]').daterangepicker();
    $('input[name="daterange"]').daterangepicker(
      {
          locale: {
            format: 'YYYY-MM-DD'
          },
          startDate: '2016-01-01',
          endDate: '2016-12-31'
      }, 
      function(start, end, label) {
          alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    $(function() {

      $('input[name="datefilter"]').daterangepicker({
          autoUpdateInput: false,
          locale: {
              cancelLabel: 'Clear'
          }
      });

      $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
      });

      $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });

    });
    </script>
  </body>
</html>

