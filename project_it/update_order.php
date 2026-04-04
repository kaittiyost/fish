<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];

	 $order_id=$_POST['order_id'];

	 $fullname=$_POST['fullname'];
	 $order_total=$_POST['order_total'];
	 $address=$_POST['address'];
	 $phone=$_POST['phone'];
	 $card=$_POST['card'];
	 $order_status=$_POST['order_status'];


					
		if($order_id!=null && $fullname!=null && $order_total!=null && $address!=null && $phone!=null && $card!=null && $order_status!=null){
			$sql_add="UPDATE tb_orders SET order_id='$order_id',fullname='$fullname',order_total='$order_total',address='$address',phone='$phone',card='$card',order_status='$order_status' WHERE order_id=".$id;
			$rs_add=mysqli_query($conn, $sql_add);
			//echo $sql_add;
			
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_order.php');
	  		</script>";
		
		}else{
		
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_order.php');
	  		</script>";
		}
?>
