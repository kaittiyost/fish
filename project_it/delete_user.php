<?php 
include ('connect/connect.php'); 

	$id=$_GET['id'];
	
	$unlink="select * from tb_user where user_id='$id'";
	$rs_un=mysql_query($unlink);
	$row_un=mysql_fetch_array($rs_un);
	
	if($id!=""){
		$sql_delete="delete from tb_user where user_id='$id'";	
		$rs_delete=mysql_query($sql_delete);

		echo "<script language='javascript'>
   		alert('Delete เรียบร้อยแล้ว!!!');
		window.location=('show_user.php ');
  		</script>";
		
	}else{
		echo "<script language='javascript'>
   		alert('Delete ไม่สามารถลบข้อมูลได้');
		window.location=('show_user.php ');
  		</script>";
	}
?>