<?php
declare(strict_types=1);

header('Content-Type: text/html; charset=utf-8');

$serverName = 'mysql';
$db = 'MYDB';
$username = 'root';
$password = 'secret';

$conn = new PDO("mysql:host=$serverName;dbname=$db", $username, $password);
$results = $conn->query('SELECT * FROM greetings')->fetchAll();

if ($results) {
    foreach ($results as $result) {
        echo utf8_encode('Hello: ' . $result['greeting'] . '<br>');
    }
} else {
    echo 'Hello?';
}