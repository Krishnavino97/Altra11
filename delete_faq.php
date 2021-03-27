<?php

	require_once("connection.php");

	if(isset($_GET['del']))
	{
		$user_ID = $_GET['del'];
		
		$sql = "DELETE FROM faq WHERE no = ".$user_ID;
		$result = mysqli_query($conn,$sql);
		
		
		if($result)
		{
			header("location:view_faq.php");
		}
		else
		{
			echo 'Please check your query';
		}
		
	}
	
?>
	