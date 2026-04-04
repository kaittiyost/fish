<?php 
include ('connect/connect.php'); 

	$id=$_GET['id'];
	
	$unlink="select * from tb_feed where feed_id='$id'";
	$rs_un=mysqli_query($conn, $unlink);
	$row_un=mysqli_fetch_array($rs_un);
	
	if($id!=""){
		$sql_delete="delete from tb_feed where feed_id='$id'";	
		$rs_delete=mysqli_query($conn, $sql_delete);

		echo "<script language='javascript'>
   		alert('Delete เรียบร้อยแล้ว!!!');
		window.location=('insert_note_feed.php');
  		</script>";
		
	}else{
		echo "<script language='javascript'>
   		alert('Delete ไม่สามารถลบข้อมูลได้');
		window.location=('insert_note_feed.php');
  		</script>";
	}
?>