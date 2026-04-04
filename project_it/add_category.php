<?php 
session_start();
include ('connect/connect.php'); 

	 $category=$_POST['category_name'];
	  
	if($category!=""){
		
		$sql_chek="select * from tb_category where category_name='$category'";
		$rs_check=mysqli_query($conn, $sql_chek);
		$num=mysqli_num_rows($rs_check);
		if($num!=1){//ตรวจข้อมูลซ้ๆ
			$sql_add="insert into tb_category values('','$category')";
			$rs_add=mysqli_query($conn, $sql_add);
			
			
			echo "<script>";
			echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			echo "window.location='insert_type_product.php';";
          	echo "</script>";
		
		}else{
			echo "<script>";
			echo "alert('มีรายการนี้แล้วกรุณาทำรายการใหม่อีกครั้ง !');";
			echo "window.location='insert_type_product.php';";
          	echo "</script>";
		}
	}else{
			echo "<script>";
			echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !');";
			echo "window.location='insert_type_product.php';";
          	echo "</script>";
	}
?>
