<?php 
 include ('connect/connect.php');
   if($_GET["Action"] == "Save"){
    //*** Insert Reply ***//
    $strSQL = "INSERT INTO reply ";
    $strSQL .="(QuestionID,CreateDate,Details,Name) ";
    $strSQL .="VALUES ";
    $strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
    $objQuery = mysqli_query($conn, $strSQL);
    //header("refresh: 0; ViewWebboard.php");
    
    //*** Update Reply ***//
    $strSQL = "UPDATE webboard ";
    $strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
    $objQuery = mysqli_query($conn, $strSQL); 


  }
 ?>
