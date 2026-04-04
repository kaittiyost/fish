<?php 
//connect DB//////////////////////////////////
session_start();
include ('connect/connect.php'); 

	 $category=$_POST['category_id'];
	 $name=$_POST['p_name'];

	 $pic=$_FILES['p_pic']['name'];
	 $tmp_pic=$_FILES['p_pic']['tmp_name'];
	 $path="pic/$pic";

	 $price=$_POST['p_price'];
	 $number=$_POST['p_number'];
	 $date=$_POST['p_date'];

	 // print"category : ".$category;
	  
	if($category!="" && $name!="" && $price!="" && $number!="" && $pic!="" && $date!=""){
		
		if($category!=""){//ตรวจข้อมูลซ้ๆ
			move_uploaded_file($tmp_pic,'pic/'.$pic);
			$sql_add="INSERT INTO tb_product(p_id, category_id, p_name, p_pic, p_price, p_number, p_date) values('','$category','$name','$path','$price','$number','$date')";
				 $rs_add=mysql_query($sql_add);
					//echo "SQL = ".$sql_add;
					 echo "<script>";
					 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
					 echo "window.location='show_product.php';";
		          	 echo "</script>";
		
		}else{
			echo "<script>";
			echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่ !');";
			echo "window.location='insert_productFull.php';";
		    echo "</script>";
		}
	}else{
		echo "<script>";
		echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !');";
		echo "window.location='insert_productFull.php';";
		echo "</script>";
	}
?>
