<?php 
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['uname']);
	session_destroy();
	echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
 ?>