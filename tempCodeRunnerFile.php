<?php
echo "<table border='1px'>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Position</th>";
echo "<th>Salary</th>";
foreach($UserData as $user){
echo "<tr>";
foreach($user as $single){
  echo "<td>$single</td>";
}
echo "</tr>";

}
echo "</table>";