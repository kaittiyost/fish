<?php 

session_start();
include ('connect/connect.php'); 

	 $id= $_GET['id'];

	 $fish_number=$_POST['fish_number'];
	 $fish_name=$_POST['fish_name'];
	 $fish_start=$_POST['fish_start'];
	 $fish_resource=$_POST['fish_resource'];
	 $fish_size=$_POST['fish_size'];
	 $fish_amount=$_POST['fish_amount'];
	 $fish_price=$_POST['fish_price'];

					
		if($fish_number!=null && $fish_name!=null && $fish_start!=null && $fish_resource!=null && $fish_size!=null && $fish_amount!=null && $fish_price!=null){
			$sql_add="UPDATE tb_fish SET fish_number='$fish_number',fish_name='$fish_name',fish_start='$fish_start',fish_resource='$fish_resource',fish_size='$fish_size',fish_amount='$fish_amount',fish_price='$fish_price' WHERE fish_id=".$id;
			$rs_add=mysql_query($sql_add);
			
			//echo $sql_add;
			
			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_note.php');
	  		</script>";
		
		}else{
		
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_note.php');
	  		</script>";
		}
?>
