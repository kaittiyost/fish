<?php 
session_start();
include ('connect/connect.php'); 

	 $bank_number=$_POST['bank_number'];
	 $bank_name=$_POST['bank_name'];
	  
	if($bank_number!=""){
		
		$sql_chek="select * from tb_bank where bank_number='$bank_number'";
		$rs_check=mysqli_query($conn, $sql_chek);
		$num=mysqli_num_rows($rs_check);
		if($num!=1){//ตรวจข้อมูลซ้ๆ
			$sql_add="insert into tb_bank values('','$bank_number','$bank_name')";
			$rs_add=mysqli_query($conn, $sql_add);
			echo $sql_add;
			
			echo "<script>";
			echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			echo "window.location='show_list.php';";
          	echo "</script>";
		
		}else{
			echo "<script>";
			echo "alert('มีรายการนี้แล้วกรุณาทำรายการใหม่อีกครั้ง !');";
			echo "window.location='show_list.php';";
          	echo "</script>";
		}
	}else{
			echo "<script>";
			echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !');";
			echo "window.location='show_list.php';";
          	echo "</script>";
	}
?>
