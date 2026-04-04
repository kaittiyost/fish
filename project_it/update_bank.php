<?php 
	session_start();
	include ('connect/connect.php'); 

	 $id= $_GET['id'];
	 $bank_number=$_POST['bank_number'];
	 $bank_name=$_POST['bank_name'];
	 			
		if($bank_number!=null && $bank_name!=null ){
			$sql_add="UPDATE tb_bank SET bank_number='$bank_number',bank_name='$bank_name' WHERE bank_id=".$id;
			$rs_add=mysql_query($sql_add);
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_list.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_list.php');
	  		</script>";
		}
?>
