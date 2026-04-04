<?php 
	session_start();
	include ('connect/connect.php'); 

	 $id= $_GET['id'];

	 $p_name=$_POST['p_name'];
	 $p_price=$_POST['p_price'];
	 $p_number=$_POST['p_number'];

	 $pic=$_FILES['p_pic']['name'];
	 $tmp_pic=$_FILES['p_pic']['tmp_name'];
	 $path="pic/$pic";

					
		if($p_name!=null && $p_price!=null && $p_number!=null && $path!=null){
			$sql_add="UPDATE tb_product SET p_name='$p_name',p_price='$p_price',p_number='$p_number',p_pic='$path' WHERE p_id=".$id;
			$rs_add=mysqli_query($conn, $sql_add);
			move_uploaded_file($tmp_pic,'pic/'.$pic);
			//echo $sql_add;

			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_product.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_product.php');
	  		</script>";
		}
?>
