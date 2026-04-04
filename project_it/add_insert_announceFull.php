<?php 
//connect DB//////////////////////////////////
session_start();
include ('connect/connect.php'); 

	 $type=$_POST['tp_id'];
	 $header=$_POST['post_header'];
	 $detail=$_POST['post_detail'];

	 $pic=$_FILES['post_pic']['name'];
	 $tmp_pic=$_FILES['post_pic']['tmp_name'];
	 $path="pic/$pic";

	 $date=$_POST['post_date'];

	  
	if($type!="" && $header!="" && $detail!="" && $pic!="" && $date!=""){
		if($type!=""){//ตรวจข้อมูลซ้ๆ
			move_uploaded_file($tmp_pic,'pic/'.$pic);
			$sql_add="insert into tb_postmessage(post_id, tp_id, post_header,post_detail, post_pic,  post_date) values('','$type','$header','$detail','$path','$date')";
				 $rs_add=mysqli_query($conn, $sql_add);
					//echo "SQL = ".$sql_add;
					 echo "<script>";
					 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
					 echo "window.location='show_announce.php';";
		          	 echo "</script>";
		
		}else{
			echo "<script>";
			echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่ !');";
			echo "window.location='insert_announceFull.php';";
		    echo "</script>";
		}
	}else{
		echo "<script>";
		echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !');";
		echo "window.location='insert_announceFull.php';";
		echo "</script>";
	}
?>
