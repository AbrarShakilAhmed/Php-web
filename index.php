<?php

// $host = "localhost";
// $name = "root";
// $pass = null;
// $dbName = "college";

// $conn = new mysqli($host,$name,$pass,$dbName);
// $students = $conn->query("SELECT * FROM `students` WHERE 1")->fetch_all();

// print_r($students[0]);

$dsn = "mysql:host=localhost;dbname=college";
$username = "root";
$password = null;

try {
    $pdo = new PDO($dsn, $username, $password);



} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


print_r($pdo->query("Select * from students where 1")->fetchAll());
print_r($pdo->query("Select * from students where 1")->fetchAll())
?>

