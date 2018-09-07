<html>
    <head>
    <title>My shop</title>
    </head>

    <body>
        <h1>Test shop</h1>




<?php
$servername = "localhost";
$username = "admin";
$password = "95t8wNYqKMfh";
$dbname = "eadvisor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ol>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"]. " £" . $row["price"]. "</li>";
    }
    echo "</ol>";
} else {
    echo "0 results";
}
$conn->close();

?>


    </body>
</html>
