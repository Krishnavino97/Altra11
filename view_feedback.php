<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
</head>

<body style ="background-color:#a7bfc9">





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

$sql = "SELECT no,fname, lname, email, subject FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
			<tr>
			<th>Full Name</th>
			<th>Email</th>
			<th>Feedback</th>
			<th>Reply</th>
			<th>Remove</th>
			</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
				<td>" . $row["fname"] . $row["lname"]. "</td>
				<td>" . $row["email"]. "</td>
				<td>" . $row["subject"]. "</td>
				<td><button> Reply </button></td>
				<td><button> Remove </button></td>
				</tr>";
    }
    echo "</table>";
} else {
    echo "No available rows";
}

$conn->close();
?>
<br>
</div>


</body>
</html>