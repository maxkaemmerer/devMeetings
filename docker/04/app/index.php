<?php
$servername = 'mysql';
$db = 'MYDB';

$username = 'root';
$password = 'secret';

$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
$results = $conn->query('SELECT * FROM greetings')->fetchAll();

if ($results) {
    foreach ($results as $result) {
        echo 'Hello: ' . $result['greeting'] . '<br>';
    }
} else {
    echo 'Hello?';
}
