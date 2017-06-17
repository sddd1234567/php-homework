<?php 
	


session_start();


if (isset($_POST['Item'])) 
{
	$_SESSION['quantity'] = $_POST['num'];
	$id = $_POST['Item'];
	$_SESSION['ID'] = $id;

	switch ($_SESSION['ID']) 
	{
		case "S001":
			$_SESSION['name'] = "10吋變形平板";
			$_SESSION['price'] = 12000;
			break;
			
		case "S002":
			$_SESSION['name'] = "15.6吋筆記型電腦";
			$_SESSION['price'] = 27000;
			break;

		case "S003":
			$_SESSION['name'] = "iPhone手機";
			$_SESSION['price'] = 21000;
			break;
	}
	header("Location: savecart.php");
}