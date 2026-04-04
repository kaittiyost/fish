 
  <?php
session_start();
require 'connect/connect.php';
$id=$_GET['id'];
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
            <a class="glyphicon glyphicon-list-alt" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              รายการใบสั่งซื้อสินค้า
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
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
            <a class="glyphicon glyphicon-barcode" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              รายการแจ้งชำระสินค้า
            </a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
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
             
              </br>
              <form class="form-horizontal" id="form1" name="form1" method="post" action="#" enctype="multipart/form-data">
              <table class="table" >
                  <tr align="center" class="success"> 

                  </tr>
                    <?php
                        $sql="select * from tb_payment where pm_id=".$id;
                        $rs1=mysql_query($sql);
                        $no=1;
                       $row_sh=mysql_fetch_array($rs1);
                    ?>
                  <tr align="center">
                        
                        <td><img src="<?php echo $row_sh['pm_pic'];?>" width="100%" height="100%"></td>
                       
                  </tr>
                  
              </table>
              </form>
               <a href="show_order.php"><button type="button" class="btn btn-primary glyphicon glyphicon-backward"> ย้อนกลับ</button></a>
               <br>
          </div><!--col-xs-12 col-md-8-->
        </div>
      </div>
    </div><!--content-->
    <br>
<?php include 'footer.php';?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
	
