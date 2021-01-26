<?php

	require_once("connection.php");

	if(isset($_GET['del']))
	{
		$user_ID = $_GET['del'];
		
		$sql = "DELETE * FROM supplier WHERE ID = '".$user_ID."'  ";
		$result = mysqli_query($conn,$sql);
		
		
		if($result)
		{
			header("location:supplier_viewsupplier.php");
		}
		else
		{
			echo 'Please check your query';
		}
		
	}
	
?>
	