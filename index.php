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

echo "<h1 align='center'>This is student database </h1> ";

$dsn = "mysql:host=localhost;dbname=college";
$username = "root";
$password = null;

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

$students = $pdo->query("SELECT * FROM students")->fetchAll();

echo "<table border='1' align='center'>";
echo "<tr><th>Name</th><th>Id</th><th>Course</th><th>Address</th><th>Delete</th></tr>";

foreach ($students as $p) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($p['Name']) . "</td>";
    echo "<td>" . htmlspecialchars($p['Id']) . "</td>";
    echo "<td>" . htmlspecialchars($p['Course']) . "</td>";
    echo "<td>" . htmlspecialchars($p['Address']) . "</td>";
    echo "<td> <form action='' method='post'>";
    echo "<input type='hidden' name='Id' value='" . htmlspecialchars($p['Id']) . "'>";
    echo "<button type='submit' name='delete'>Delete</button>";
    echo "</form> </td>";
    echo "</tr>";
}
echo "</table>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://images.pexels.com/photos/827209/pexels-photo-827209.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" type="image/x-icon">
    <title>Student Data</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: black;
            color: white;
        }
        form{
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: auto;
            &{
                padding: 10px;
                margin: 10px;
            }
        }
        table{
            margin: 40px auto;
            border-collapse: collapse;
            width: 60%;
        }
        th{
            background: steelblue;
            color: white;
        }
        td{
            background: gray;
            color: white;
        }
        tr,td,th{
            border: 1px solid white;
            border-collapse: collapse;
            padding: 10px;
            margin: 10px;
        }
        button{
            background: white;
            color: black;
            padding: 5px;
            border: none;
            cursor: pointer;
            border-radius: 30px;
            margin: 20px;
        }
        input[type="text"]{
            padding: 5px;
            margin: 5px;
            border: none;
            background: white;
            color: black;
        }
        .form{
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: auto;
            padding: 50px;
            background-color:steelblue;
            border-radius: 10px;
        }
        h1{
            text-align: center;
            color: white;
            margin-top: 20px;
        }
        h2{
            text-align: center;
            color: white;
            margin-bottom: 20px;
            background-color: transparent;
        }
    </style>
</head>
<body>

    <br><br><br><br><br>
    <form  class="form" action="" method="post">
        <h2>Add Data</h2>
        <label for="name">Name</label>
        <input type="text" name="name" required placeholder="Enter your name" autocomplete="off">
        <br>
        <label for="course">Course</label>
        <input type="text" name="course" required placeholder="Enter your course" autocomplete="off">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" required placeholder="Enter your address" autocomplete="off">
        <br>
        <button type="submit" value="submit">Add Data</button>
    </form>

</body>
</html>

<?php

if (isset($_POST["name"])) {
    try {

        $data = $pdo->prepare("INSERT INTO students (Name, Course, Address) VALUES (:name, :course, :address)");

        $data->bindParam(':name', $_POST['name']);
        $data->bindParam(':course', $_POST['course']);
        $data->bindParam(':address', $_POST['address']);

        $data->execute();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
};

if (isset($_POST["delete"])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM students WHERE Id = :id");
        $stmt->bindParam(':id', $_POST['Id']);
        $stmt->execute();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } catch (PDOException $e) {
        echo "Error: is" . $e->getMessage();
    }
}

?>
