<?php

$UserData = [
  ["Hasan Seik", 34, "Senior Officer", 4500],
  ["Ali Khan", 28, "Junior Developer", 3000],
  ["Sara Ali", 40, "Manager"],
  ["John Doe", 45, "Team Lead", 6000],
  ["Emily Green", 32, "HR Specialist", 4000],
  ["Michael Smith", 38, 5000],
  ["Ayesha Khan", 29, "Software Engineer", 3500],
  ["David Clark", 41, "Marketing Manager", 4700],
  ["Lina Patel", 35, "Sales Executive", 4200],
  ["James Wilson", 50, "CEO", 10000],
  ["", 28, "Junior Developer", 3000] // Example of missing name
];

echo "<table border='1px'>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Position</th>";
echo "<th>Salary</th>";

foreach($UserData as $user){
    echo "<tr>";

    // Check if the name is missing or empty
    $name = !empty($user[0]) ? $user[0] : "Unknown";

    // Check if the age, position, or salary is missing or empty
    $age = !empty($user[1]) ? $user[1] : "Unknown";
    $position = !empty($user[2]) ? $user[2] : "Unknown";
    $salary = !empty($user[3]) ? $user[3] : "Unknown";

    echo "<td>$name</td>";
    echo "<td>$age</td>";
    echo "<td>$position</td>";
    echo "<td>$salary</td>";

    echo "</tr>";
}

echo "</table>";
?>
