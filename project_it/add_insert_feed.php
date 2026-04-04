<?php 
session_start();
include ('connect/connect.php'); 

	 $fish=$_POST['fish_number'];
	 $name=$_POST['feed_name'];
	 $date=$_POST['feed_date'];
	 $amount=$_POST['feed_amount'];
	 $total=$_POST['feed_total'];

	if($fish!="" && $name!="" && $date!="" && $amount!="" && $total!=""){
		
		if($fish!=""){//ตรวจข้อมูลซ้ๆ
			
			$sql_add="insert into tb_feed(feed_id, feed_name, feed_date, feed_amount, feed_total,fish_number) values('','$name','$date','$amount','$total','$fish')";
				 $rs_add=mysql_query($sql_add);
					//echo "SQL = ".$sql_add;
					
			 echo "<script>";
			 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			 echo "window.location='insert_note_feed.php';";
          	 echo "</script>";
		
		}else{
			 echo "<script>";
			 echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่อีกครั้ง');";
			 echo "window.location='insert_note_feed.php';";
          	 echo "</script>";
		}
	}else{
			 echo "<script>";
			 echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !!');";
			 echo "window.location='insert_note_feed.php';";
          	 echo "</script>";
	}
?>
