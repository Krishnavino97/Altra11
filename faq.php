
<?php

include "add_faq.php";
include "connection.php";

?>

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="faq.css">
</head>
<body style = "background-color:#f2f2f2; margin:10px 10px 10px 10px;">
<div class = "grid">
.

<div class="form-style-6">
<h1>Add new questions</h1>
<img src = "images/faq.png" height = "230px" width = "300px"></img>	

<form method = "POST" action = "add_faq.php">
<input type="text" name="question" placeholder="Enter the question" />
<input type="text" name="answer" placeholder="Enter the answer" />
<input type="submit" name = "add" value="Submit" />
</form>

</div>

<?php 
	include "connection.php";

	$sql = "SELECT no, question, answer FROM faq";
	$result = $conn->query($sql);

?>



<?php

	
	if ($result->num_rows > 0) {
    ?>
	
	
	
<div class="box">
	<p class="heading">FAQs</p>
	<div class="faqs">
	<?php
	
    // output data of each row
	if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
		
				$no = $row['no'];
				$question = $row['question'];
				$answer = $row['answer'];
	?>
	
	   <details>
	   <summary> <?php echo $question ?> </summary>
       <p class="text"> <?php echo $answer ?> </p>
	   <button class= "button_faq" onclick = "edit_faq.php?getID=<?php echo $no?>"> Update</button>
	   <button class= "button_faq" onclick = "delete_faq.php?getID=<?php echo $no?>"> Delete</button>
	   </details>
	   <?php
	}
	?>
	  
	</div>
	</div>
	
	<?php
	}
	?>
	
	<?php
	}
	

	
 else {
    echo "0 results";
}

$conn->close();
?>

<div style = "margin-top:60px;">
<img src = "images/faq_user.png" height = "350px" width = "300px"></img>
</div>	
	
</body>
</html>

