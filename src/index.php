<?php
$conn = new mysqli("database", "root", "root", "psquare_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select id, name, gender, role, playedby from harrypotterchars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>ID</th><th>Name</th><th>Gender</th><th>Role</th><th>Played By</th></tr>";
	$i = 0;
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["role"]."</td><td>".$row["playedby"]."</td></tr>";
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
