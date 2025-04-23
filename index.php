<?php

// $host = "localhost";
// $name = "root";
// $pass = null;
// $dbName = "college";

// $conn = new mysqli($host,$name,$pass,$dbName);
// $students = $conn->query("SELECT * FROM `students` WHERE 1")->fetch_all();

// print_r($students);
// echo "<br>";
// echo "<br>";
// echo "<br>";

$dsn = "mysql:host=localhost;dbname=college";
$username = "root";
$password = null;

try {
    $pdo = new PDO($dsn, $username, $password);



} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$students = $pdo->query("Select * from students where 1")->fetchAll();



echo "<table border='1' >";

foreach($students as $p){
    echo "<tr>";
    echo "<td>" . $p['Name'] ." </td>";
    echo "<td>" . $p['Id'] ." </td>";
    echo "<td>" . $p['Course'] ." </td>";
    echo "<td>" . $p['Address'] ." </td>";
    echo "</tr>";
    // echo $p;
}
echo "</table>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" required>
        <br>
        <label for="course">Course</label>
        <input type="text " name="course" required>
        <br>
        <label for="course">Address</label>
        <input type="text " name="Address" required>
        <br>
        <button>Add Data</button>
    </form>
</body>
</html>

<?php

if(isset($_POST["name"])){
    echo $_POST['name'];
}

