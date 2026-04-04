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
            <h1><img src="./img/headerNews.png" width="350" height="70"></h1>
          </div>
          </div>
        </div><br>

        <ul class="nav nav-tabs" style="border-color: #3399FF;">
          <li role="presentation"><a href="show_hotnew.php"><b>รวมทั้งหมด</b></a></li>
          <li role="presentation" class="active"><a href="show_new1.php"><b>ประกาศ</b></a></li>
          <li role="presentation"><a href="show_new2.php"><b>อัพเดท</b></a></li>
          <li role="presentation"><a href="show_new3.php"><b>กิจกรรม</b></a></li>
          <li role="presentation"><a href="show_new4.php"><b>โปรโมชั่น</b></a></li>
        </ul>
          <br>
        <div class="row"><!--content-->
      <div class="container" align="center"> 
        <?php $sql = mysql_query("select * from tb_postmessage where tp_id=1"); ?>    
        <div class="row">         
          <?php while($result = mysql_fetch_array($sql)) { ?>
          <div class="col-sm-5 col-md-4">
            <div class="thumbnail">
              <img src="<?php echo $result['post_pic']; ?>" style="width:350px; height: 250px;" class="img-rounded"><br>
              <table class="caption">
                <tr>
                    <td colspan="2"  align="center"><h3><?php echo $result['post_header']; ?></h3></td>
                </tr>
                <tr>
                    <td colspan="2"  align="center"><?php echo $result['post_header']; ?></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><?php echo "<b>วันที่ : </b>".$result['post_date']; ?></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><a href="show_newdetail.php?id=<?php echo $result['post_id'];?>"><b>◄ รายละเอียดเพิ่มเติม ►</b></a></td>
                </tr>
              </table>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </div><!--content-->
      </div>
    </div><!--row1-->

  <?php include 'footer.php';?>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>


