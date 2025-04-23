<?php

$host = "localhost";
$name = "root";
$pass = null;
$dbName = "college";

$conn = new mysqli($host,$name,$pass,$dbName);
$students = $conn->query("SELECT * FROM `students` WHERE 1")->fetch_all();

print_r($students);
echo "<br>";
echo "<br>";
echo "<br>";

$dsn = "mysql:host=localhost;dbname=college";
$username = "root";
$password = null;

try {
    $pdo = new PDO($dsn, $username, $password);



} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$pdo->query("Select * from students where 1")->fetchAll();

?>

