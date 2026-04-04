<?php 
	session_start();
	include ('connect/connect.php'); 

	 $id= $_GET['id'];
	 $title=$_POST['tp_title'];
	 

					
		if($title!=null){
			$sql_add="UPDATE tb_type_post SET tp_title='$title' WHERE tp_id=".$id;
			$rs_add=mysql_query($sql_add);
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('insert_announce.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('insert_announce.php');
	  		</script>";
		}
?>
