<?php 
//connect DB//////////////////////////////////
session_start();
include ('connect/connect.php'); 

	 $header=$_POST['k_header'];
	 //$pic=$_POST['k_pic'];
	 $detail=$_POST['k_detail'];
	 $date=$_POST['k_date'];

	 $pic=$_FILES['k_pic']['name'];
	 $tmp_pic=$_FILES['k_pic']['tmp_name'];
	 $path="pic/$pic";
	  
	if($header!="" && $detail!="" && $date!="" && $pic!=""){
		
		$sql_chek="select * from tb_knowledge where k_header='$header'";
		$rs_check=mysql_query($sql_chek);
		$num=mysql_num_rows($rs_check);
		if($num!=1){//ตรวจข้อมูลซ้ๆ
			move_uploaded_file($tmp_pic,'pic/'.$pic);
			$sql_add="insert into tb_knowledge values('','$header','$path','$detail','$date')";
			$rs_add=mysql_query($sql_add);
			
			
			echo "<script>";
			 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			 echo "window.location='show_content.php';";
          	 echo "</script>";
		
		}else{
			echo "<script>";
			echo "alert('ข้อมูลซ้ำ');";
			echo "window.location='insert_content.php';";
          	echo "</script>";
		}
	}else{
		echo "<script>";
		echo "alert('ข้อมูลไม่ครบ');";
		echo "window.location='insert_content.php';";
         echo "</script>";
	}
?>
