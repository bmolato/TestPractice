<?php
    $db_name = "employees";
    $un = "root";
    $pw = "root";
    $host = "localhost";
    
    $conn = mysql_connect($host, $un, $pw) or die (mysql_error());
   //echo("Connected to mySQL Database");
    
    mysql_select_db($db_name) or die(mysql_error());
    //echo("Connected to employees");

?>