<?php
	session_start();
	if ($_SESSION['user_id' == '']) {
		echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
	}else if ($_SESSION['status' == 2]) {
		echo "<meta http-equiv='refresh' content='1;URL=logout.php'>";
	}else{
?>		
	}
	<h1>User Page</h1>
	<a href="logout.php" class="btn btn-primary">Logout</a>
<?php
	}
?>	
	
	