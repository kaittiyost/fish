<?php 

session_start();
$itemId = isset($_GET['id']) ? $_GET['id'] : "";



if ($_POST) 
{
    for ($i = 0; $i < count($_POST['qty']); $i++)
    {
        $key = $_POST['arr_key_' . $i];
        $_SESSION['qty'][$key] = $_POST['qty'][$i];
        header('location:preOrder.php');
    }
}else{
	if($_GET['action'] == 'add'){
		if (!isset($_SESSION['cart']))
    	{
        	$_SESSION['cart'] = array();
        	$_SESSION['qty'][] = array();
    	}

    	if (in_array($itemId, $_SESSION['cart']))
    	{
        	$key = array_search($itemId, $_SESSION['cart']);
        	$_SESSION['qty'][$key] = $_SESSION['qty'][$key] + 1;
        	header('location:preOrder.php');
    	} else
    	{
        	array_push($_SESSION['cart'], $itemId);
        	$key = array_search($itemId, $_SESSION['cart']);
        	$_SESSION['qty'][$key] = 1;
        	header('location:preOrder.php');
    	}
	}
	if($_GET['action'] == 'remove'){
		$key = array_search($itemId, $_SESSION['cart']);
		$_SESSION['qty'][$key] = "";

		$_SESSION['cart'] = array_diff($_SESSION['cart'], array($itemId));
		header('location:preOrder.php');
	}

}


 ?>


