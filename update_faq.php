<?php

	require_once("connection.php");

	if(isset($_POST['update']))
	{
		$no = $_GET['no'];
		$question = $_POST['question'];
		$answer = $_POST['answer'];
	
		$sql = "UPDATE faq SET question = '".$question."' , answer = '".$answer."' WHERE no = '".$no."'  ";
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
	else
	{
		header("location:view_faq.php");
	}
?>
	