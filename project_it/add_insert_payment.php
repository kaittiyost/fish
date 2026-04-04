<?php 
//connect DB//////////////////////////////////
session_start();
include ('connect/connect.php'); 

	 $order=$_POST['order_id'];
	 $date=$_POST['pm_date'];

	 $pic=$_FILES['pm_pic']['name'];
	 $tmp_pic=$_FILES['pm_pic']['tmp_name'];
	 $path="pic/$pic";

	 $bank_id=$_POST['bank_id'];

	 

	  
	if($order!="" && $date!="" && $pic!="" && $bank_id!=""){
		
		$sql_chek="select * from tb_payment where order_id='$order'";
		$rs_check=mysql_query($sql_chek);
		$num=mysql_num_rows($rs_check);
		if($num!=1){//ตรวจข้อมูลซ้ๆ
			move_uploaded_file($tmp_pic,'pic/'.$pic);
			$sql_add="INSERT INTO tb_payment(pm_id, order_id, pm_pic, pm_date, bank_id)values('','$order','$path','$date','$bank_id')";
			//echo $sql_add;
			$rs_add=mysql_query($sql_add);

			 echo "<script>";
			 echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			 echo "window.location='payment.php';";
          	 echo "</script>";
			
		
		}else{
			echo "<script>";
			 echo "alert('ข้อมูลซ้ำ !!');";
			 echo "window.location='payment.php';";
          	 echo "</script>";
			
		}
	}else{
		echo "<script>";
			 echo "alert('ข้อมูลไม่ครบ !!');";
			 echo "window.location='payment.php';";
          	 echo "</script>";
	}
?>
