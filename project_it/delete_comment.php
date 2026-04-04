<?php 
include ('connect/connect.php'); 

	$id=$_GET['id'];
	
	$unlink="select * from reply where ReplyID='$id'";
	$rs_un=mysqli_query($conn, $unlink);
	$row_un=mysqli_fetch_array($rs_un);
	
	if($id!=""){
		$sql_delete="delete from reply where ReplyID='$id'";	
		$rs_delete=mysqli_query($conn, $sql_delete);

		echo "<script language='javascript'>
   		alert('Delete เรียบร้อยแล้ว!!!');
		window.location=('show_comment.php');
  		</script>";
		
	}else{
		echo "<script language='javascript'>
   		alert('Delete ไม่สามารถลบข้อมูลได้');
		window.location=('show_comment.php');
  		</script>";
	}
?>