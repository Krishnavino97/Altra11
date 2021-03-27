<?php 
	include "connection.php";
	

	$userID = $_GET['getID'];
				
	$sql = "SELECT no, question, answer FROM faq WHERE no='".$userID."' ";
	$result = mysqli_query($conn,$sql);
	
	 while($row = mysqli_fetch_assoc($result))
		 {
				$userID = $row['no'];
				$question = $row['question'];
				$answer = $row['answer'];
		 }

?>

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="faq.css">
</head>
<body style = "background-color:#f2f2f2; margin:10px 10px 10px 10px;">
<div class = "grid">

<div class="form-style-6">
<h1>Add new questions</h1>
<img src = "images/faq.png" height = "230px" width = "300px" style="margin-left:100px"></img>	

<form action = "update_faq.php?no=<?php echo $userID ?>" method = "POST">
<input type="text" name="question" value="<?php echo $question ?>" />
<input type="text" name="answer" value="<?php echo $answer ?>" />
<input type="submit" name = "update" value="Submit" />
</form>

</div>


<div style = "margin-top:60px">
<img src = "images/faq2.png" height = "450px" width = "400"></img>
</div>	
	
</body>
</html>

