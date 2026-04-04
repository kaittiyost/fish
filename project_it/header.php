<?php 
  include ('connect/connect.php');
?>
        <nav class="navbar-inverse navbar-fixed-top" style="background-color: black;">
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
                      <li><a href="user_edit.php?id=<?php echo $_SESSION['user_id'];?>"><font color="#01DF01"><b>ยินดีต้อนรับ</b></font> : <?php echo $_SESSION['uname']?></a></li>
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
             <nav class="navbar navbar-inverse" style="background-color: black;">
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
                   <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
                  <li><a href="preOrder.php"><b>ตะกร้าสินค้า</b></a></li>
                  <?php }else{?>  
                  <?php } ?>
                  <li><a href="payment.php"><b>แจ้งชำระสินค้า</b></a></li> 
                  <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){?>
                    <li><a href="Webboard.php"><b>เว็บบอร์ด</b></a></li> 
                  <?php }else{?>  
                  <?php } ?>
                  <li><a href="us.php"><b>ติดต่อ</b></a></li>  
                </ul>
              </div>
              </div>
            </nav>
          </div>
        </div><!--row-->
      


