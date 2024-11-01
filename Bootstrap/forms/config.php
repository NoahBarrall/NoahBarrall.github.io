<?php

//this file connects the project to the database. when using queries elsewhere in the project,
//use: include 'config.php'; at the top and then use $conn variable from this file

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RecZone";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>