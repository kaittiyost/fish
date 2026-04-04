
<?php 
session_start();
include ('connect/connect.php');

	 $number=$_POST['fish_number'];
	 $name=$_POST['fish_name'];
	 $start=$_POST['fish_start'];
	 $resource=$_POST['fish_resource'];
	 $size=$_POST['fish_size'];
	 $amount=$_POST['fish_amount'];
	 $price=$_POST['fish_price'];
	  
	if($number!="" && $name!="" && $start!="" && $resource!="" && $size!="" && $amount!="" && $price!=""){

		if($number!=""){

			$sql_add="INSERT INTO tb_fish(fish_id, fish_name, fish_start, fish_resource, fish_size, fish_amount, fish_price,fish_number) VALUES ('','$name','$start','$resource','$size','$amount','$price','$number')";
			 $rs_add=mysqli_query($conn, $sql_add);
			 //echo "SQL = ".$sql_add;

			 echo "<script>";
			 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			 echo "window.location='insert_note.php';";
          	 echo "</script>";
		
		}else{
			 echo "<script>";
			 echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่อีกครั้ง');";
			 echo "window.location='insert_note.php';";
          	 echo "</script>";
		}
	}else{
			 echo "<script>";
			 echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !!');";
			 echo "window.location='insert_note.php';";
          	 echo "</script>";
	}
?>
