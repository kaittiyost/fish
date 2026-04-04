<?php 
	session_start();
	include ('connect/connect.php'); 

	 $id= $_GET['id'];

	 $post_header=$_POST['post_header'];
	 $post_detail=$_POST['post_detail'];

	 $pic=$_FILES['post_pic']['name'];
	 $tmp_pic=$_FILES['post_pic']['tmp_name'];
	 $path="pic/$pic";

					
		if($post_header!=null && $post_detail!=null){
			$sql_add="UPDATE tb_postmessage SET post_header='$post_header',post_detail='$post_detail',post_pic='$path' WHERE post_id=".$id;
			$rs_add=mysqli_query($conn, $sql_add);
			move_uploaded_file($tmp_pic,'pic/'.$pic);

			echo "<script language='javascript'>
	   		alert('แก้ไขข้อมูลเรียบร้อยแล้ว.');
			window.location=('show_announce.php');
	  		</script>";
		}
		else{
			echo "<script language='javascript'>
	   		alert('ข้อมูลไม่ถูกต้อง.');
			window.location=('show_announce.php');
	  		</script>";
		}
?>
