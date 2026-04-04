<?php 
//connect DB//////////////////////////////////
session_start();
include ('connect/connect.php'); 

	 $fish=$_POST['fish_number'];
	 $date=$_POST['dead_date'];
	 $amount=$_POST['dead_amount'];
	 $cause=$_POST['dead_cause'];
	  
	if($fish!="" && $date!="" && $amount!="" && $cause!=""){	

		if($fish!=""){//ตรวจข้อมูลซ้ๆ
			
			$sql_add="insert into tb_deadfish(dead_id, dead_date, dead_amount, dead_cause,fish_number) values('','$date','$amount','$cause','$fish')";
				 $rs_add=mysql_query($sql_add);
					//echo "SQL = ".$sql_add;
					
			 echo "<script>";
			 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			 echo "window.location='insert_note_dead.php';";
          	 echo "</script>";
		
		}else{
			 echo "<script>";
			 echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่อีกครั้ง');";
			 echo "window.location='insert_note_dead.php';";
          	 echo "</script>";
		}
	}else{
		     echo "<script>";
			 echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !!');";
			 echo "window.location='insert_note_dead.php';";
          	 echo "</script>";
	}
?>
