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
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
   <?php include 'header.php';?>
    <div class="row"><!--content-->
      <div class="container">
        <div class="col-md12">
          <div class="row">
            <div class="col-md-3 .col-md-offset-3"></div>
            <div class="col-md-6 .col-md-offset-3" align="center">
              <form class="form-horizontal" id="form1" name="form1" method="post" action="insert_register.php">
                <div class="page-header">
                  <h1><font color="#04B404">สมัครสมาชิก </font><small>ผู้ใช้งานระบบ</small></h1>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label"><font color="#04B404">ไอดีผู้ใช้งาน</font></label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="user_name" id="user_name" placeholder="User name">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label"><font color="#04B404">รหัสผ่าน</font></label>
                  <div class="col-sm-5">
                    <input class="form-control" type="password" name="pass_word" id="pass_word" placeholder="PassWord">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label"><font color="#04B404">ชื่อ</font></label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="fname" id="fname" placeholder="Name">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label"><font color="#04B404">นามสกุล</font></label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="lname" id="lname" placeholder="Lasname">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label"><font color="#04B404">ที่อยู่</font></label>
                  <div class="col-sm-5">
                     <textarea name="address" id="address" placeholder="" cols="25" rows="5"></textarea> 
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-3 control-label"><font color="#04B404">เบอร์ติดต่อ</font></label>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" name="phone" id="phone" placeholder="0987654321">
                  </div>
                </div>
                <div class="page-header">
                </div>
                <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-success">ตกลก</button>
                    <button type="reset" class="btn btn-danger">ยกเลิก</button>
                 </div>
            </div>
            </br>
              </form>
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


  </body>
</html>


