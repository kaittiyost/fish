<?php 
	include ('connect/connect.php'); 
	session_start();

	$user = $_POST['user_name'];
	$pass = $_POST['pass_word'];

	if($user==null || $pass==null){
		echo "<script>";
		echo "alert('กรุณากรอกข้อมูลให้ครบ');";
		header("refresh: 0; login.php");
		echo "</script>";
	}
	else{
		$sql="select * from tb_user where user_name='$user' and pass_word='$pass'";
		$rs1=mysqli_query($conn, $sql);
		$num=mysqli_num_rows($rs1);
		if($num!='0'){
			$rows=mysqli_fetch_array($rs1);
			$_SESSION['user_id']=$rows['user_id'];
			$_SESSION['uname']=$rows['fname']."  ".$rows['lname'];
			$_SESSION['address']=$rows['address'];
			$_SESSION['phone']=$rows['phone'];
			$status=$rows['status'];
			if($status==1){
				//echo "ยินดีต้อนรับเข้าสู่ระบบจัดการ Admin";
				header("refresh: 0; admin.php");
			}else if($status==2){
				//echo "ยินดีต้อนรับเข้าสู่ระบบผู้ใช้งาน";
				header("refresh: 0; index.php");
			}
			
		}else{
			echo "<script>";
			 echo "alert('รหัสผ่านไม่ถูกต้อง');";
			 echo "window.location='login.php';";
          	 echo "</script>";
		}
	}
?>