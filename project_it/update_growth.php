<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];

	 $growth_date=$_POST['growth_date'];
	 $growth_size=$_POST['growth_size'];
	 

					
		if($growth_date!=null && $growth_size!=null ){
			$sql_add="UPDATE tb_growth SET growth_date='$growth_date',growth_size='$growth_size' WHERE growth_id=".$id;
			$rs_add=mysql_query($sql_add);
			
			//echo $sql_add;
			
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('insert_growth.php');
	  		</script>";
		
		}else{
		
			echo "<script language='javascript'>
	   		alert('กรุณาใส่ขอมูลให้ถูกต้อง!!');
			window.location=('insert_growth.php');
	  		</script>";
		}
?>
