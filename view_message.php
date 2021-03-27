<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="view_user.css">
<link rel="stylesheet" type="text/css" href="popup.css">
<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
</head>

<body style ="background-color:#a7bfc9">



<div class = "grid">
		<form align = "right" method = "POST" action = "message_pdf.php">
		<button type = "submit" class="pdf" name = "pdf"><img class = "icon" src = "images/pdf.png" /> PDF </button> </a>
		</form>
	</div>

<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accountdb";

// Create connection
$conn = mysqli_connect ("localhost","root","","accountdb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT no,fname, lname, email, subject FROM message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
			<tr>
			<th>Full Name</th>
			<th>Email</th>
			<th>Message</th>
			</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
				<td>" . $row["fname"] . $row["lname"]. "</td>
				<td>" . $row["email"]. "</td>
				<td>" . $row["subject"]. "</td>
			
				</tr>";
    }
    echo "</table>";
} else {
    echo "No available rows";
}

$conn->close();

echo 
				"<script type = text/javascript>
				function openRly() {
					document.getElementById(rlyForm).style.d
					display = block;
				}

				function closeRly() {
					document.getElementById(rlyForm).style.display = none;
				}
				</script>";
				

?>
<br>
</div>


</body>
</html>
