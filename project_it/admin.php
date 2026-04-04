
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
    <title>[Admin] KINGDOM FISH : อาณาจักรปลา</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

 <?php include 'header_admin.php';?>
    <div class="row"><!--content-->
      <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <?php include 'menu_admin.php';?>
          </div>
          </div>
          <div class="col-xs-12 col-md-8">
            <div class="page-header">
              <h1>ยินดีต้อนรับเข้าสู่ระบบแอดมิน <small>Subtext for header</small></h1>
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
	
