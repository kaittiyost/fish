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
    <div class="row"><!--row1-->
      <div class="container" align="center"> 
      <br>

        <div class="row">
        <div class="col-md-12">
          <div class="container" align="center">
            <h1><img src="./img/note.png" width="350" height="70"></h1>
          </div>
          </div>
        </div><br>
        <ul class="nav nav-tabs" style="border-color: #3399FF;">
          <li role="presentation" class="active"><a href="note_fish.php"><b>ข้อมูลกระชัง</b></a></li>
          <li role="presentation"><a href="note_feed.php"><b>บันทึกการให้อาหาร</b></a></li>
          <li role="presentation"><a href="note_dead.php"><b>บันทึกการตาย</b></a></li>
          <li role="presentation"><a href="note_growth.php"><b>บันทึกการเจริญเติบโต</b></a></li>
        </ul>
          <br>

           <h2>ข้อมูลบันทึกการเลี้ยงปลา</h2>
              
               </br>
              <form class="form-horizontal" id="form1" name="form1" method="post" action="#">
               <?php
                  $strSQL = "SELECT * FROM tb_fish";
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
                      $strSQL .=" order  by fish_id DESC LIMIT $Page_Start , $Per_Page";
                      $objQuery  = mysqli_query($conn, $strSQL);
                      ?>
              <table class="table">
                  <tr  align="center" class="success"> 
                        
                        <td><b>หมายเลขกระชัง</b></td>
                        <td><b>ชื่อพันธุ์ปลา</b></td>
                        <td><b>วันที่เริ่มเลี้ยง</b></td>   
                        <td><b>แหล่งที่มา</b></td> 
                        <td><b>ขนาด</b></td>
                        <td><b>จำนวนปลา</b></td>               
                        <td><b>ราคาต้นทุน</b></td>
                      
                  </tr>
                    <?php
                       while($row_sh=mysqli_fetch_array($objQuery)){
                    ?>
                  <tr align="center">
                        <td><?php echo $row_sh['fish_number'];?></td>
                        <td><?php echo $row_sh['fish_name'];?></td>
                        <td><?php echo $row_sh['fish_start'];?></a></td>
                        <td><?php echo $row_sh['fish_resource'];?></td>
                        <td><?php echo $row_sh['fish_size'];?></td>
                        <td><?php echo $row_sh['fish_amount'];?></td>
                        <td><?php echo $row_sh['fish_price'];?></td>
                        
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
                //mysqli_close($conn);
                ?>
              </center> 
              <br>
              </form>

      </div>
    </div><!--content-->
      </div>
    </div><!--row1-->
<br>
  <?php include 'footer.php';?>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>


