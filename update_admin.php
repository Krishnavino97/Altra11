<?php

	require_once("connection.php");

	if(isset($_POST['update']))
	{
		$ID = $_GET['ID'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		
		$sql = "UPDATE admin SET username = '".$username."' , mobile = '".$mobile."' , email = '".$email."' , address = '".$address."' WHERE ID = '".$ID."'  ";
		$result = mysqli_query($conn,$sql);
		
		if($result)
		{
			header("location:admin_viewadmin.php");
		}
		else
		{
			echo 'Please check your query';
		}
		
	}
	else
	{
		header("location:admin_viewadmin.php");
	}
?>
	