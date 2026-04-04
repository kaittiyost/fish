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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KINGDOM FISH : อาณาจักรปลา</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
  <?php include 'header.php';?>
    <div class="row"><!--content-->
      <div class="container">
        <div class="col-md12">
          <div class="row">
            <div class="row">
            <div class="col-md-3 .col-md-offset-3"></div>
            <div class="col-md-12" align="center">
              <form class="form-horizontal" id="form1" name="form1" method="post" action="add_insert_payment.php" enctype="multipart/form-data">
                <div class="page-header">
                  <h1><font color="#04B404"><img src="./img/bg-season1.png" width="350" height="70"></font></h1></br>

                   <img src="./img/payment.png" width="" height=""></br></br></br>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-6 control-label"><font color="#04B404">เลขที่ใบสั่งสินค้า</font></label>
                  <div class="col-sm-3">
                    <input class="form-control" type="text" name="order_id" id="order_id" placeholder="">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-6 control-label"><font color="#04B404">วันที่</font></label>
                  <div class="col-sm-2">
                    <input class="form-control" type="date" name="pm_date" id="pm_date" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-6 control-label"><font color="#04B404">รูปภาพ</font></label>
                    <div class="col-sm-2">
                      <input type="file" id="pm_pic" name="pm_pic">
                      <p class="help-block">กรุณาเลือกรูปภาพที่ต้องการ.</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-6 control-label"><font color="#04B404">บัญชีธนาคารที่โอน</font></label>
                    <div class="col-sm-1">
                      <!-- Single button -->
                    <div class="btn-group">
                      <select type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="bank_id" id="bank_id">
                       <?php $sel_list="select * from tb_bank"; 
                          $rs_list=mysql_query($sel_list);
                          while($row_list=mysql_fetch_array($rs_list)){
                          ?>
                          <option value="<?php echo $row_list['bank_id']?>"> <?php echo $row_list['bank_name'];?></option>
                        <?php }?>
                      </select>
                    </div>
                    </div>
                  </div>
                <div class="page-header">
                </div>
                <div class="form-group form-group-sm">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success">ตกลก</button>
                    <button type="reset" class="btn btn-danger">ยกเลิก</button>
                 </div>
            </div></br></br>
              </form>
            </div>
            <div class="col-md-3 .col-md-offset-3"></div>
          </div>
          </div>
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


