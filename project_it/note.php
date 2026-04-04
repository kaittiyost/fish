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


