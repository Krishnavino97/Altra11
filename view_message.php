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

$sql = "SELECT firstname, lastname, email, message FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
			<tr>
			<th>Full Name</th>
			<th>Email</th>
			<th>Message</th>
			<th>Reply</th>
			<th>Remove</th>
			</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
				<td>" . $row["firstname"] . $row["lastname"]. "</td>
				<td>" . $row["email"]. "</td>
				<td>" . $row["message"]. "</td>
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