 <?php 
  include ('connect/connect.php');
  session_start();
  //unset($_SESSION['cart']);

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
               <img src="./img/bg.png" width="100%" height="50%">
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
        </div>
      </div>
    </div><!--header*3-->
   </div>
    <div class="row" ><!--row1-->
      <div class="container" align="center"> 
        <div class="row"><!--row2-->
          <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="./img/ps-list.png" width="100%" height="100%" alt="...">
                    <div class="carousel-caption"> 
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/payment-1.png " width="100%" height="100%" alt="...">
                    <div class="carousel-caption">  
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
          <div class="col-md-4">
          <h1 align="left"><img src="./img/new.png" width="350" height="70"></h1>
            <?php
                  $strSQL = "SELECT * FROM tb_postmessage";
                  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
                  $Num_Rows = mysqli_num_rows($objQuery);
                          

                      $Per_Page = 4;   // Per Page

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
                      $strSQL .=" order  by post_id DESC LIMIT $Page_Start , $Per_Page";
                      $objQuery  = mysqli_query($conn, $strSQL);
                      ?>
            <table class="table" >
                    <?php
                       while($row_sh=mysqli_fetch_array($objQuery)){
                    ?>
                  <tr>
                        <td align="left"><a href="show_newdetail.php?id=<?php echo $row_sh['post_id'];?>" ><?php echo $row_sh['post_header'];?></a></a></td>
                        <td align="right"><?php echo $row_sh['post_date'];?></td>   
                  </tr>
                  <?php }?>
                  <tr>
                    <td></td>
                    <td align="right"><a href="show_hotnew.php"><b>« รายละเอียดเพิ่มเติม</b></a></td>
                  </tr>
              </table>
          </div>
        </div><!-- row2 -->
        <div class="page-header">
        </div>

        <div class="row">
        <div class="col-md-12">
          <div class="container" align="center">
            <h1><img src="./img/order-good.png" width="350" height="70"></h1>
          </div>
          </div>
        </div><br>
         <div class="row"><!--content-->              
              <div class="container" align="center"> 
                <?php
                  function sortByValue($a, $b) {
                      return $b['count'] - $a['count'];
                  }
                  $arrpro1[]=null;
                  $objpro1=mysqli_query($conn, "select * from tb_product where category_id=1");
                  while($rspro1=mysqli_fetch_array($objpro1)){
                    $objpd1=mysqli_query($conn, "select * from tb_order_details where p_id=".$rspro1['p_id']);
                    $cpd1=0;
                    while($rspd1=mysqli_fetch_array($objpd1)){
                      $cpd1=$cpd1+$rspd1['p_number'];
                    }
                    array_push($arrpro1,array("p_id"=>$rspro1['p_id'],"count"=>$cpd1));
                  }
                  usort($arrpro1, 'sortByValue');

                  $arrpro2[]=null;
                  $objpro2=mysqli_query($conn, "select * from tb_product where category_id=2");
                  while($rspro2=mysqli_fetch_array($objpro2)){
                    $objpd2=mysqli_query($conn, "select * from tb_order_details where p_id=".$rspro2['p_id']);
                    $cpd2=0;
                    while($rspd2=mysqli_fetch_array($objpd2)){
                      $cpd2=$cpd2+$rspd2['p_number'];
                    }
                    array_push($arrpro2,array("p_id"=>$rspro2['p_id'],"count"=>$cpd2));
                  }
                  usort($arrpro2, 'sortByValue');
                  ?>
                  <h3><b>ปลาเลี้ยง( ลูกปลา )</b></h3><br>
                  <div class="row"> 
                  <?php
                  for($i=0;$i<count($arrpro1);$i++){
                    if($i>3)break;
                    if($arrpro1[$i]!=null){
                      $objpro1=mysqli_query($conn, "select * from tb_product where p_id=".$arrpro1[$i]['p_id']);
                      $rspro1=mysqli_fetch_array($objpro1);
                      ?>
                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="<?php echo $rspro1['p_pic']; ?>" style="width:250px; height: 150px;" class="img-rounded">
                          <div class="caption">
                          <b><?php echo "<img src='./img/1g.jpg' width='50' height='50'> ".$arrpro1[$i]['count']; ?></b>
                            <h3><?php echo $rspro1['p_name']; ?></h3>
                            <p><?php echo "ราคา ".$rspro1['p_price']." บาท"; ?></p>
                            <p><a href="add_cart.php?action=add&id=<?php echo $rspro1['p_id'];?>" class="btn btn-danger" role="button">สั่งซื้อ</a></p>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                  }?>
                  </div>
                  <h3><b>ปลาเลี้ยง ( ปลาโต )</b></h3><br>
                  <div class="row"> 
                  <?php
                  for($i=0;$i<count($arrpro2);$i++){
                    if($i>3)break;
                    if($arrpro2[$i]!=null){
                      $objpro2=mysqli_query($conn, "select * from tb_product where p_id=".$arrpro2[$i]['p_id']);
                      $rspro2=mysqli_fetch_array($objpro2);
                      ?>
                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="<?php echo $rspro2['p_pic']; ?>" style="width:250px; height: 150px;" class="img-rounded">
                          <div class="caption">
                            <b><?php echo "<img src='./img/1g.jpg' width='50' height='50'> ".$arrpro2[$i]['count']; ?></b>
                            <h3><?php echo $rspro2['p_name']; ?></h3>
                            <p><?php echo "ราคา ".$rspro2['p_price']." บาท"; ?></p>
                            <p><a href="add_cart.php?action=add&id=<?php echo $rspro2['p_id'];?>" class="btn btn-danger" role="button">สั่งซื้อ</a></p>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                  }?>
                  </div>
              </div>
          
              <br>
             
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


