<?php 
//connect DB//////////////////////////////////
session_start();
include ('connect/connect.php'); 

	 $user=$_POST['user_name'];
	 $pass=$_POST['pass_word'];
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $address=$_POST['address'];
	 $phone=$_POST['phone'];
	 $status=2;

	  
	if($user!="" && $pass!="" && $fname!="" && $lname!="" && $address!="" && $phone!=""){
		
		$sql_chek="select * from tb_user where user_name='$user'";
		$rs_check=mysql_query($sql_chek);
		$user_name=mysql_num_rows($rs_check);
		if($user_name!=1){//ตรวจข้อมูลซ้ๆ
			$sql_add="insert into tb_user values('','$user','$pass','$fname','$lname','$address','$phone','$status')";
			$rs_add=mysql_query($sql_add);
			
			 echo "<script>";
			 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			 echo "window.location='index.php';";
          	 echo "</script>";
		
		}else{
			 echo "<script>";
			 echo "alert('ข้อมูลซ้ำ !!');";
			 echo "window.location='register.php';";
          	 echo "</script>";
			
		}
	}else{
		     echo "<script>";
			 echo "alert('ข้อมูลไม่ครบ !!');";
			 echo "window.location='register.php';";
          	 echo "</script>";
		
	}



?>
