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
       <!--- <a href="NewQuestion.php"><h1>ตั้งกระทู้</h1></a>-->
         <div class="row">
        <div class="col-md-12">
          <div class="container" align="center">
            <h1><img src="./img/web.png" width="350" height="70"></h1>
          </div>
          </div>
        </div><br>
       <table width="1140">
          <tr>
            <td align="right">
              <button type="button" class="btn btn-success" onclick="window.location='NewQuestion.php'">
                <span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;ตั้งกระทู้</span>
              </button>
            </td>
          </tr>
        </table></br>
          
          <?php
            $strSQL = "SELECT * FROM webboard ";
            $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
            $Num_Rows = mysqli_num_rows($objQuery);

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

            $strSQL .=" order  by QuestionID DESC LIMIT $Page_Start , $Per_Page";
            $objQuery  = mysqli_query($conn, $strSQL);
          ?>
          <table class="table table-striped" >
            <tr align="center" class="success">
              <th width="99"> <div align="center" class="success">รหัสกระทู้</div></th>
              <th width="458"> <div align="center" class="success">เนื้อหา</div></th>
              <th width="190"> <div align="center" class="success">เจ้าของกระทู้</div></th>
              <th width="130"> <div align="center" class="success">วัน/เดือน/ปี เวลา</div></th>
              <th width="45"> <div align="center" class="success">อ่าน</div></th>
              <th width="47"> <div align="center" class="success">ตอบ</div></th>
            </tr>
          <?php
          while($objResult = mysqli_fetch_array($objQuery))
          {
          ?>
            <tr align="center">
              <td><div align="center"><?php echo $objResult["QuestionID"];?></div></td>
              <td><a href="ViewWebboard.php?QuestionID=<?php echo $objResult["QuestionID"];?>"><?php echo $objResult["Question"];?></a></td>
              <td><?php echo $objResult["Name"];?></td>
              <td><div align="center"><?php echo $objResult["CreateDate"];?></div></td>
              <td align="center"><?php echo $objResult["View"];?></td>
              <td align="center"><?php echo $objResult["Reply"];?></td>
            </tr>
          <?php
          }
          ?>
          </table>

          <br>
          <b>จำนวนกระทู้ทั้งหมด</b> <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
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
          //mysqli_close($conn);
          ?>

      </div></br></br>
    </div><!--content-->
  <?php include 'footer.php';?>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
