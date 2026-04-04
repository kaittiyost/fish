<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];


	 $dead_date=$_POST['dead_date'];
	 $dead_amount=$_POST['dead_amount'];
	 $dead_cause=$_POST['dead_cause'];
	 

					
		if($dead_date!=null && $dead_amount!=null && $dead_cause!=null ){
			$sql_add="UPDATE tb_deadfish SET dead_date='$dead_date',dead_amount='$dead_amount',dead_cause='$dead_cause' WHERE dead_id=".$id;
			$rs_add=mysql_query($sql_add);
			
			//echo $sql_add;
			
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('insert_note_dead.php');
	  		</script>";
		
		}else{
		
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('insert_note_dead.php');
	  		</script>";
		}
?>
