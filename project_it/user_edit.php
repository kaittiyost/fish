 <?php include ('connect/connect.php'); 
    session_start();

    $sql="SELECT * FROM tb_user WHERE user_id=".$_REQUEST['id'];
    $rows=mysql_query($sql);
    $rs1=mysql_fetch_array($rows);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <form class="form-horizontal" id="form1" name="form1" method="post" action="update_registers.php?id=<?php echo $_GET['id']; ?>">
                <div class="page-header">
                  <h1>แก้ไข <small>ข้อมูลส่วนตัว</small></h1>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-2 control-label">ไอดีผู้ใช้งาน</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="user_name" id="user_name" value="<?php echo $rs1['user_name']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-2 control-label">รหัสผ่าน</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="password" name="pass_word" id="pass_word" value="<?php echo $rs1['pass_word']; ?>">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-2 control-label">ชื่อ</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="fname" id="fname" value="<?php echo $rs1['fname']; ?>">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-2 control-label">นามสกุล</label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="lname" id="lname" value="<?php echo $rs1['lname']; ?>">
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-2 control-label">ที่อยู่</label>
                  <div class="col-sm-5">
                     <textarea name="address" id="address" placeholder="" cols="25" rows="5"><?php echo $rs1['address']; ?></textarea> 
                  </div>
                </div>
                <div class="form-group form-group-sm">
                  <label class="col-sm-2 control-label">เบอร์ติดต่อ</label>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $rs1['phone']; ?>">
                  </div>
                </div>
                <div class="page-header">
                </div>
                <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-success">อัพเดทข้อมูล</button>
                    <button type="reset" class="btn btn-danger">ยกเลิก</button>
                 </div>
            </div></br></br></br>
              </form>
            </div>
            <div class="col-md-3 .col-md-offset-3"></div>
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


