<?php 
include ('connect/connect.php'); 

	$id=$_GET['id'];
	
	$unlink="select * from webboard where QuestionID='$id'";
	$rs_un=mysql_query($unlink);
	$row_un=mysql_fetch_array($rs_un);
	
	if($id!=""){
		$sql_delete="delete from webboard where QuestionID='$id'";	
		$rs_delete=mysql_query($sql_delete);

		echo "<script language='javascript'>
   		alert('Delete เรียบร้อยแล้ว!!!');
		window.location=('show_post.php');
  		</script>";
		
	}else{
		echo "<script language='javascript'>
   		alert('Delete ไม่สามารถลบข้อมูลได้');
		window.location=('show_post.php');
  		</script>";
	}
?>