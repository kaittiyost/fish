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
    <div class="row"><!--content-->
      <div class="container" align="center"> 
        
          <html>
          <head>
          <title>ThaiCreate.Com</title>
          </head>
          <body>
          <div class="row">
            <div class="col-md-3 .col-md-offset-3"></div>
<div class="col-md-6 .col-md-offset-3" align="center" >
          <form action="add_insert_NewQuestion.php?Action=Save" method="post" name="frmMain" id="frmMain">
                <div class="page-header">
                  <h1><font color="#04B404">เพิ่มกระทู้</font></h1>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label"><font color="#04B404">หัวข้อกระทู้</font></label>
                  <div class="col-sm-7">
                    <input class="form-control" name="txtQuestion" type="text" id="txtQuestion">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-4 control-label"><font color="#04B404">รายละเอียด</font></label>
                  <div class="col-sm-5">
                    <textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea>
                  </div>
                </div>
                 <div class="form-group form-group-sm">
                  <div class="col-sm-5">
                    <input name="txtName" type="hidden" id="txtName" value="<?php echo $_SESSION['uname']; ?>" size="50">
                  </div>
                </div>
                <div class="page-header">
                </div>
                <div class="form-group form-group-sm">
                <label class="col-sm-8 control-label"></label>
                <div class="col-sm-11">
                    <button name="btnSave" type="submit" id="btnSave" class="btn btn-success">ตกลก</button>
                    <button type="reset" class="btn btn-danger">ยกเลิก</button>
                 </div>
            </div></br></br></br>
              </form>
              </div>
              </div>
          </body>
          </html>
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
