<?php 
session_start();
include ('connect/connect.php'); 

	 $fish=$_POST['fish_number'];
	 $date=$_POST['growth_date'];
	 $size=$_POST['growth_size'];


	if($fish!="" &&  $date!="" && $size!="" ){
		
		if($fish!=""){//ตรวจข้อมูลซ้ๆ
			
			$sql_add="INSERT INTO tb_growth(growth_id, fish_number, growth_date, growth_size) values('','$fish','$date','$size')";
				$rs_add=mysqli_query($conn, $sql_add);
					//echo "SQL = ".$sql_add;
					
			 echo "<script>";
			 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			 echo "window.location='insert_growth.php';";
          	 echo "</script>";
		
		}else{
			 echo "<script>";
			 echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่อีกครั้ง');";
			 echo "window.location='insert_growth.php';";
          	 echo "</script>";
		}
	}else{
			 echo "<script>";
			 echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !!');";
			 echo "window.location='insert_growth.php';";
          	 echo "</script>";
	}
?>
