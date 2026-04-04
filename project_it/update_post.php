<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];


	 $Question=$_POST['Question'];
	 $Details=$_POST['Details'];

	 

					
		if($Question!=null && $Details!=null){
			$sql_add="UPDATE webboard SET Details='$Details',Question='$Question' WHERE QuestionID=".$id;
			$rs_add=mysql_query($sql_add);
		
			// echo $sql_add;
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_post.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_post.php');
	  		</script>";
		}
?>
