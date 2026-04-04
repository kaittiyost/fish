<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];


	 $Details=$_POST['Details'];

	 

					
		if($Details!=null){
			$sql_add="UPDATE reply SET Details='$Details' WHERE ReplyID=".$id;
			$rs_add=mysql_query($sql_add);
		
			// echo $sql_add;
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_comment.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_comment.php');
	  		</script>";
		}
?>
