<?php 
	session_start();
	include ('connect/connect.php'); 

	 $id= $_GET['id'];
	 $category=$_POST['category_name'];
	 

					
		if($category!=null){
			$sql_add="UPDATE tb_category SET category_name='$category' WHERE category_id=".$id;
			$rs_add=mysqli_query($conn, $sql_add);
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('insert_type_product.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('insert_type_product.php');
	  		</script>";
		}
?>
