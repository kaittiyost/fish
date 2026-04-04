<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];

	 $feed_name=$_POST['feed_name'];
	 $feed_date=$_POST['feed_date'];
	 $feed_amount=$_POST['feed_amount'];
	 $feed_total=$_POST['feed_total'];
	 

					
		if($feed_name!=null && $feed_date!=null && $feed_amount!=null && $feed_total!=null ){
			$sql_add="UPDATE tb_feed SET feed_name='$feed_name',feed_date='$feed_date',feed_amount='$feed_amount',feed_total='$feed_total' WHERE feed_id=".$id;
			$rs_add=mysqli_query($conn, $sql_add);
			
			//echo $sql_add;
			
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('insert_note_feed.php');
	  		</script>";
		
		}else{
		
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('insert_note_feed.php');
	  		</script>";
		}
?>
