 <?php 
  include ('connect/connect.php');
  session_start();
                  if(@$_GET["Action"] == "Save"){
              //*** Insert Reply ***//
              $strSQL = "INSERT INTO reply ";
              $strSQL .="(QuestionID,CreateDate,Details,Name) ";
              $strSQL .="VALUES ";
              $strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
              $objQuery = mysql_query($strSQL);
              //header("refresh: 0; ViewWebboard.php");
              
              //*** Update Reply ***//
              $strSQL = "UPDATE webboard ";
              $strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
              $objQuery = mysql_query($strSQL); 

            }

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
     <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand  glyphicon glyphicon-flag" href="index.php"><b> KINGDOM <font color="#01DF01">FISH</font></b></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php 
                  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="user_edit.php?id=<?php echo $rows['user_id'];?>"><font color="#01DF01"><b>ยินดีต้อนรับ</b></font> : <?php echo $_SESSION['uname']?></a></li>
                      <li><a href="logout.php" class="glyphicon glyphicon-log-out"><b>Logout</b></a></li>
                    </ul>
                 <?php }else{?>       
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b> SIGN <font color="#01DF01">UP</font></b></a></li>
                      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <b> LOGIN</b></a></li>
                    </ul>
                <?php } ?>
              </div><!-- /.navbar-collapse -->
           
        </nav>
        <div class="row">
          <div class="col-sm-12">
               <img src="./img/bg.png" width="100%" height="100%">
          </div>
          <div class="col-sm-12">
             <nav class="navbar navbar-inverse">
              <div class="container">
              <div class="container-fluid">
                <ul class="nav navbar-nav">
                  <li><a href="index.php"><b><font color="#01DF01">หน้าแรก</font></b></a></li>
                  <li><a href="show_hotnew.php"><b>ข่าวสาร</b></a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>เกร็ดความรู้</b>
                    <font color="#01DF01"><span class="caret"></span></font></a>
                    <ul class="dropdown-menu">
                      <li><a href="show_list1.php" class="glyphicon glyphicon-triangle-right"> ข้อมูลฟาร์ม</a></li>
                      <li><a href="show_list2.php" class="glyphicon glyphicon-triangle-right"> วิธีการเลี้ยงปลา</a></li>
                      <li><a href="show_list3.php" class="glyphicon glyphicon-triangle-right"> พันธุ์ปลา</a></li>
                      <li><a href="show_list4.php" class="glyphicon glyphicon-triangle-right"> โรคที่เกิดจากปลาและวิธีการรักษา</a></li>
                      <li><a href="show_list5.php" class="glyphicon glyphicon-triangle-right"> พื้นที่การเลี้ยงที่เหมาะสม</a></li>
                      <li><a href="show_list6.php" class="glyphicon glyphicon-triangle-right"> ประเภทปลาที่เหมาะสม</a></li>  
                      <li><a href="show_list7.php" class="glyphicon glyphicon-triangle-right"> อาหารและวิธีการให้อาหาร</a></li>
                      <li><a href="show_list8.php" class="glyphicon glyphicon-triangle-right"> อุปกรณ์ในการสร้างกระชัง</a></li>
                    </ul>
                  </li>
                  <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
                    <li><a href="note_fish.php"><b>บันทึก</b></a></li> 
                  <?php }else{?>  
                  <?php } ?>
                  <li><a href="show_product_list.php"><b>สินค้า</b></a></li>
                  <li><a href="preOrder.php"><b>ตะกร้าสินค้า</b></a></li>
                  <li><a href="payment.php"><b>แจ้งชำระสินค้า</b></a></li> 
                  <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
                    <li><a href="Webboard.php"><b>เว็บบอร์ด</b></a></li> 
                  <?php }else{?>  
                  <?php } ?>
                  <li><a href="us.php"><b>ติดต่อ</b></a></li>  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="ค้นหาสินค้า...">
                          <span class="input-group-btn">
                            <button class="btn btn-success" type="button">ค้นหา</button>
                          </span>
                      </div>
                    </form>
                  </ul>
              </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div><!--header*3-->
    <div class="row">
      <div class="container" align="center">
        <?php
          //*** Select Question ***//
          $strSQL = "SELECT * FROM webboard  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
          $objQuery = mysql_query($strSQL);
          $objResult = mysql_fetch_array($objQuery);

          //*** Update View ***//
          $strSQL = "UPDATE webboard ";
          $strSQL .="SET View = View + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
         $objQuery = mysql_query($strSQL); 
          ?>
          <table width="738">
            <tr>
              <td colspan="2" class="alert alert-danger" align="left"><h3><?php echo $objResult["Question"];?></h3></td>
            </tr>
            <tr>
              <td height="53" colspan="2" align="center" class="alert alert-success"><?php echo($objResult["Details"]);?></td>
            </tr>
            <tr>
              <td width="397" class="alert alert-success"><b>ผู้ใช้งาน :</b> <?php echo $objResult["Name"];?> <b>วันที่ :</b> <?php echo $objResult["CreateDate"];?></td>
              <td width="253" class="alert alert-success">View : <?php echo $objResult["View"];?> Reply : <?php echo $objResult["Reply"];?></td>
            </tr>
          </table>
          <br>
          <br>
          <?php
            $intRows = 0;
            $strSQL2 = "SELECT * FROM reply  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
            $objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL."]");
            while($objResult2 = mysql_fetch_array($objQuery2))
            {
              $intRows++;
          ?> 
          <table width="738" >
            <tr>
              <td colspan="2" class="alert alert-info"><b>ความคิดเห็นที่ : </b><?php echo $intRows;?></td>
            </tr>
            <tr>
              <td height="70" colspan="2" class="alert alert-success"><?php echo($objResult2["Details"]);?></td>
            </tr>
            <tr>
              <td width="397" class="alert alert-success"><b>ผู้ใช้งาน : </b><?php echo $objResult2["Name"];?></td>
              <td width="253" class="alert alert-success"><b>วันที่ : </b><?php echo $objResult2["CreateDate"];?></td>
            </tr>
          </table><br>
          <?php
          }
          ?>
        
          <br>
          <form action="ViewWebboard.php?QuestionID=<?php echo $_GET["QuestionID"];?>&Action=Save" method="post" name="frmMain" id="frmMain">
            <table width="738">
              <tr>
                <td align="center" class="alert alert-success"><h2>แสดงความคิดเห็น </h2></td>
                <td> <textarea name="txtDetails" cols="50" rows="7" id="txtDetails"></textarea></td>
              </tr>
              <tr>
                <td width="647"><input name="txtName" type="hidden" id="txtName" value="<?php echo $_SESSION['uname']; ?>" size="50"></td>
              </tr>
    </table> 
    <br> 
  <input class="btn btn-success" name="btnSave" type="submit" id="btnSave" value="เพิ่มความคิดเห็น">
</form>
      </div>
    </div>
    <br>
  <?php include 'footer.php';?>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>