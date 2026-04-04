<?php include ('connect/connect.php'); 
  $sql="select * from tb_user where user_id='$_SESSION[user_id]'";
  $rs1=mysql_query($sql);
  $rows=mysql_fetch_array($rs1);
?>
 <div class="row"><!--header*3-->
      <div class="col-sm-12">
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
              <a class="navbar-brand  glyphicon glyphicon-flag" href="#"><b> KINGDOM <font color="#01DF01">FISH</font></b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php 
                if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><font color="#01DF01"><b>ยินดีต้อนรับ</b></font> : <?php echo $_SESSION['uname']?></a></li>
                    <li><a href="logout.php" class="glyphicon glyphicon-log-out"><b>Logout</b></a></li>
                  </ul>
               <?php }else{?>       
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b> SIGN <font color="#01DF01">UP</font></b></a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <b> LOGIN</b></a></li>
                  </ul>
              <?php } ?>
            </div><!-- /.navbar-collapse -->

            </div>
          </div><!-- /.container-fluid -->
        </nav>
        <div class="row">

          <div class="col-sm-12">
           <div class="container">            
            <img src="./img/bg-admin.png" width="100%" height="50%">
            </div>
           
          </div>

          <div class="col-sm-12">
             
          </div>
        </div>
      </div>
    </div><!--header*3-->