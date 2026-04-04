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
            <h1><img src="./img/bg-list.png" width="350" height="70"></h1>
          </div>
          </div>
        </div><br>
        <?php 
          $sql = mysql_query("select * from tb_knowledge where k_id=5"); 
          $result = mysql_fetch_array($sql);
        ?>
          <table class="caption">
                <tr>
                    <td colspan="2"  align="center"><h3><?php echo $result['k_header']; ?></h3><br></td>
                </tr>
                <tr>  
                  <td align="center">  
                      <img src="<?php echo $result['k_pic']; ?>" style="width:550px; height: 250px;" class="img-rounded">
                  </td>
                </tr>
                <tr>
                    <td colspan="2"  align="left"><br><?php echo $result['k_detail']; ?></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><br><?php echo "<b>วันที่ : </b>".$result['k_date']; ?></td>
                </tr>
                
              </table>
       <br>

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


