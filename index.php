<?php

require_once("db_connect.php");

$sql = "SELECT * FROM employee";
$result = mysql_query($sql) or die(mysql_error());
echo("<table>");
while($row = mysql_fetch_array($result)){
echo("<tr>");

echo "<td>" . $row['empId'] . "</td>"
    ."<td>" . $row['lastName'] . "</td>"
    ."<td>" . $row['firstName'] . "</td>"
    ."<td>" .  $row['department'] . "</td>"
    . "<td>" .  $row['position'].  "</td>"
    . "<td>" . $row['salary'] . "</td>"
    . "<td><a href='delete.php?id=" . $row['empId']  . "'>Delete</a></td>" .
    "<td><a href='update.php?id=" . $row['empId'] .   "'>Update</a></td>";


echo '</tr>';

}

echo("</table>");
?>