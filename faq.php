
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

<div class="form-style-6">
<h1>Add new questions</h1>
<img src = "images/faq.png" height = "230px" width = "300px" style="margin-left:100px"></img>	

<form method = "POST" action = "add_faq.php">
<input type="text" name="question" placeholder="Enter the question" />
<input type="text" name="answer" placeholder="Enter the answer" />
<input type="submit" name = "add" value="Submit" />
</form>

</div>


<div style = "margin-top:60px">
<img src = "images/faq_add.png" height = "450px" width = "400"></img>
</div>	
	
</body>
</html>

