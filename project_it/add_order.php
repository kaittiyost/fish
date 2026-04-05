<?php 
//connect DB//////////////////////////////////
session_start();
include ('connect/connect.php'); 
	 $i=0;
	 $oid=0;
	 $fullname=$_POST['fullname'];
	 $address=$_POST['address'];
	 $phone=$_POST['phone'];
	 $card=$_POST['card'];
	 $total=$_POST['total'];
	 $user=$_SESSION['user_id'];

	if($fullname!="" && $address!="" && $phone!="" && $card!="" && $total!=""){
		if($fullname!=""){//ตรวจข้อมูลซ้ๆ
			
			$sql_add="INSERT INTO tb_orders(order_id, user_id, order_total, fullname, address, phone, card) values(null,'$user','$total','$fullname','$address','$phone','$card')";
				 $rs_add=mysqli_query($conn, $sql_add);
				$order_id = mysqli_insert_id($conn);
				//echo "SQL = ".$sql_add."<br>";
				if ($rs_add) {
					$itemIds = "";
				    	foreach ($_SESSION['cart'] as $itemId)
				    	{
				        	$itemIds = $itemIds . $itemId . ",";
				    	}
						    $inputItems = rtrim($itemIds, ",");
						    $meSql = "SELECT * FROM tb_product WHERE p_id in ({$inputItems})";
						    $meQuery = mysqli_query($conn, $meSql);
				
				while ($r=mysqli_fetch_array($meQuery)) {	
				  $key = $_POST['arr_key_' . $i];
         			  $num = $_SESSION['qty'][$key];
						$sql_add="INSERT INTO tb_order_details(order_id, p_id, p_price, p_number) values('$order_id','$r[p_id];','$r[p_price];','$num')";
						mysqli_query($conn, $sql_add);
						$i++;
						$oid=$order_id;

						$objproduct=mysqli_query($conn, "select * from tb_product where p_id=$r[p_id]");
						$rproduct=mysqli_fetch_array($objproduct);
						$num=$rproduct['p_number']-$num;
						mysqli_query($conn, "update tb_product set p_number=".$num." where p_id=$r[p_id]");
						
						echo "<script>";
						echo "alert('สั่งซื้อสินค้าเสร็จเรียบร้อยแล้ว');";
						echo "window.location='show_orderDetail_list.php?oid=".$oid."';";
					    echo "</script>";
				}

					unset($_SESSION['cart']);
					unset($_SESSION['qty']);
			}
		
		}else{
			echo "<script>";
			echo "alert('ข้อมูลซ้ำกรุณาทำรายการใหม่ !');";
			echo "window.location='order_detail.php';";
		    echo "</script>";
		}
	}else{
		echo "<script>";
		echo "alert('กรุณากรอกข้อมูลให้ครบทุกช่อง !');";
		echo "window.location='order_detail.php';";
		echo "</script>";
	}
?>
