<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];


	 $pass=$_POST['pass_word'];
	 $fn=$_POST['fname'];
	 $ln=$_POST['lname'];
	 $address=$_POST['address'];
	 $phone=$_POST['phone'];

					
		if($pass!=null && $fn!=null && $ln!=null && $address!=null && $phone!=null){
			$sql_add="UPDATE tb_user SET pass_word='$pass',fname='$fn',lname='$ln',address='$address',phone='$phone' WHERE user_id=".$id;
			$rs_add=mysql_query($sql_add);
			//echo $sql_add;
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('index.php');
	  		</script>";
			}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('index.php');
	  		</script>";
		}
?>
