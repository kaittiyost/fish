 
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
             <h2>ข้อมูลแจ้งชำระสินค้า</h2>
              <p>รายละเอียดข้อมูลแจ้งชำระสินค้าทั้งหมด สามารถเแก้ไขและลบข้อมูลได้</p></br>
              </br>
              <div class="row">
                <div class="col-md-6">
                  <form class="form-horizontal" id="form" name="form" method="post" action="add_bank.php">
                  <center><h3>เพิ่มข้อมูลบัญชีธนาคาร</h3></center><hr />
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">เลขบัญชีธนาคาร</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="bank_number" name="bank_number" >
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">เชื่อบัญชีธนาคาร</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="bank_name" name="bank_name" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-12">
                      <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                      <button type="reset" class="btn btn-danger">ยกเลิก</button>
                    </div>
                  </div>
                </form>
                <hr />
                </div>
                <div class="col-md-6">
                 <form class="form-horizontal" id="form1" name="form1" method="post" action="#">
                <?php
                  $sql = "SELECT * FROM tb_bank";
                  $obj = mysql_query($sql) or die ("Error Query [".$sql."]");
                  $Num_Rows1 = mysql_num_rows($obj);
                          

                      $Per_Page1 = 4;   // Per Page

                      @$Page = $_GET["Page"];
                      if(@!$_GET["Page"])
                      {
                        $Page=1;
                      }

                      $Prev_Page1 = $Page-1;
                      $Next_Page1 = $Page+1;

                      $Page_Start = (($Per_Page1*$Page)-$Per_Page1);
                      if($Num_Rows1<=$Per_Page1)
                      {
                        $Num_Pages1 =1;
                      }
                      else if(($Num_Rows1 % $Per_Page1)==0)
                      {
                        $Num_Pages1 =($Num_Rows1/$Per_Page1) ;
                      }
                      else
                      {
                        $Num_Pages1 =($Num_Rows1/$Per_Page1)+1;
                        $Num_Pages1 = (int)$Num_Pages1;
                      }
                      $sql .=" order  by bank_id DESC LIMIT $Page_Start , $Per_Page1";
                      $obj  = mysql_query($sql);
                      ?>
              <table class="table">
                  <tr  align="center" class="success"> 
                        <td><b>เลขบัญชีธนาคาร</b></td>
                        <td><b>บัญชีธนาคาร</b></td>
                                                
                        <td><b>แก้ไข</b></td>
                        <td><b>ลบ</b></td>
                  </tr>
                    <?php
                        
                       while($row_sh=mysql_fetch_array($obj)){
                    ?>
                  <tr align="left">
                        <td><?php echo $row_sh['bank_number'];?></td>
                        <td><?php echo $row_sh['bank_name'];?></td>
                        
                        <td width="30"><a class="glyphicon glyphicon-cog" href="edit_bank.php?id=<?php echo $row_sh['bank_id'];?>"></a></td>
                        <td width="30"><a class="glyphicon glyphicon-trash" name="btnConfirm" value="Confirm"
                          onclick="return confirm('ต้องการลบหรือไม่ ?')"
                          href="delete_bank.php?id=<?php echo $row_sh['bank_id'];?>">
                        </td>
                  </tr>
                  <?php }?>
              </table>
              <center>  
              <br>
                <b>ทั้งหมด</b> <?php echo $Num_Rows1;?> Record : <?php echo $Num_Pages1;?> <b>หน้า :</b>
                <?php
                if($Prev_Page1)
                {
                  echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page1'><< Back</a> ";
                }

                for($i=1; $i<=$Num_Pages1; $i++){
                  if($i != $Page)
                  {
                    echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
                  }
                  else
                  {
                    echo "<b> $i </b>";
                  }
                }
                if($Page!=$Num_Pages1)
                {
                  echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page1'>Next>></a> ";
                }
                //mysql_close($objConnect);
                ?>
              </center> 
              <br>
              </form>
                </div>
              </div>
               
              <form class="form-horizontal" id="form1" name="form1" method="post" action="#" enctype="multipart/form-data">
                <?php
                  $strSQL = "SELECT * FROM tb_payment a,tb_bank b WHERE a.bank_id=b.bank_id";
                  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                  $Num_Rows = mysql_num_rows($objQuery);
                          

                      $Per_Page = 10;   // Per Page

                      @$Page = $_GET["Page"];
                      if(@!$_GET["Page"])
                      {
                        $Page=1;
                      }

                      $Prev_Page = $Page-1;
                      $Next_Page = $Page+1;

                      $Page_Start = (($Per_Page*$Page)-$Per_Page);
                      if($Num_Rows<=$Per_Page)
                      {
                        $Num_Pages =1;
                      }
                      else if(($Num_Rows % $Per_Page)==0)
                      {
                        $Num_Pages =($Num_Rows/$Per_Page) ;
                      }
                      else
                      {
                        $Num_Pages =($Num_Rows/$Per_Page)+1;
                        $Num_Pages = (int)$Num_Pages;
                      }
                      $strSQL .=" order  by pm_id DESC LIMIT $Page_Start , $Per_Page";
                      $objQuery  = mysql_query($strSQL);
                      ?>
              <table class="table" >
                  <tr align="center" class="success"> 
                        <td><b>รหัสใบสั่งสินค้า</b></td>                   
                        <td><b>ภาพประกอบ</b></td>                        
                        <td><b>วันที่</b></td>
                        <td><b>ธนาคารปลายทาง</b></td>
                        <td><b>ลบ</b></td>
                  </tr>
                    <?php
                       while($row=mysql_fetch_array($objQuery)){
                    ?>
                  <tr align="center">
                        <td><?php echo $row['order_id'];?></a></td>
                        <td><a href="show_payment_list.php?id=<?php echo $row['pm_id']; ?>"><img src="<?php echo $row['pm_pic'];?>" width="100" height="100"></a></td>
                        <td><?php echo $row['pm_date'];?></td>
                        <td><?php echo $row['bank_name'];?></td>
                        <td width="30"><a class="glyphicon glyphicon-trash" name="btnConfirm" value="Confirm"
                          onclick="return confirm('ต้องการลบหรือไม่ ?')"
                          href="delete_payment.php?id=<?php echo $row['pm_id'];?>">
                        </td>
                  </tr>
                  <?php }?>
              </table>
              <center>  
              <br>
                <b>ทั้งหมด</b> <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> <b>หน้า :</b>
                <?php
                if($Prev_Page)
                {
                  echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
                }

                for($i=1; $i<=$Num_Pages; $i++){
                  if($i != $Page)
                  {
                    echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
                  }
                  else
                  {
                    echo "<b> $i </b>";
                  }
                }
                if($Page!=$Num_Pages)
                {
                  echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
                }
                //mysql_close($objConnect);
                ?>
              </center> 
              <br>
              </form>
          </div><!--col-xs-12 col-md-8-->
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
	
