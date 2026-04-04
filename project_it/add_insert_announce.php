<?php 
session_start();
include ('connect/connect.php'); 
	 $type=$_POST['tp_title'];
	  
	if($type!=""){
		
		//$sql_chek="select * from tb_type_post where tp_title='$type'";
		//$rs_check=mysql_query($sql_chek);
		//$num=mysql_num_rows($rs_check);
		if($type!=""){//ตรวจข้อมูลซ้ๆ

			$sql_add="insert into tb_type_post values('','$type')";
			$rs_add=mysql_query($sql_add);
			
			echo "<script>";
			echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			echo "window.location='insert_announce.php';";
		    echo "</script>";
			
		
		}else{
			echo "<script>";
			echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่ !');";
			echo "window.location='insert_announce.php';";
		    echo "</script>";
		}
	}else{
		echo "<script>";
		echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !');";
		echo "window.location='insert_announce.php';";
		echo "</script>";
	}
?>
