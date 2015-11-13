<?php
    require_once("db_connect.php");
    
    $id = $_REQUEST['id'];
    $last = $_REQUEST['last'];
    $first = $_REQUEST['first'];
    $department = $_REQUEST['department'];
    $position = $_REQUEST['position'];
    $salary = $_REQUEST['salary'];
    
    $sql=   "UPDATE employee SET " .
            "lastName = '" . $last . "', " .
            "firstName = '" . $first . "', " .
            "department = '" . $department . "', " .
            "position = '" . $position . "', " .
            "salary = '" . $salary . "' WHERE empId =  '" . $id . "';";
            
    //echo($sql);
    
    mysql_query($sql) or die(mysql_error());
    
    print("User " . $id . " has been updated. Back to <a href='index.php'>Main Page</a>.");

?>