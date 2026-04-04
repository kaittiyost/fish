<?php 
session_start();
include ('connect/connect.php'); 
	
          if($_GET["Action"] == "Save")
          {
            //*** Insert Question ***//
            $strSQL = "INSERT INTO webboard ";
            $strSQL .="(CreateDate,Question,Details,Name) ";
            $strSQL .="VALUES ";
            $strSQL .="('".date("Y-m-d H:i:s")."','".$_POST["txtQuestion"]."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
            $objQuery = mysql_query($strSQL);
            
            header("location:Webboard.php");
          }
         
?>
