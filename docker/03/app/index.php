<?php
$servername = 'mysql';
$db = 'MYDB';

$username = 'root';
$password = 'secret';

$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
// set the PDO error mode to exception
$result = $conn->query("SELECT * FROM greetings");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Hello: " . $row["greeting"] ."<br>";
    }
} else {
    echo "Hello?";
}
