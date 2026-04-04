<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];

	 $k_header=$_POST['k_header'];
	 $k_detail=$_POST['k_detail'];
	 
	 $pic=$_FILES['k_pic']['name'];
	 $tmp_pic=$_FILES['k_pic']['tmp_name'];
	 $path="pic/$pic";
					
		if($k_header!=null && $k_detail!=null && $path!=null){
			move_uploaded_file($tmp_pic,'pic/'.$pic);
			$sql_add="UPDATE tb_knowledge SET k_header='$k_header',k_pic='$path',k_detail='$k_detail' WHERE k_id=".$id;
			$rs_add=mysql_query($sql_add);
			
			//echo $sql_add;
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_content.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_content.php');
	  		</script>";
		}
?>
