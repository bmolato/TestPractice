<?php
    
    $id = $_REQUEST['id'];
    require_once("db_connect.php");
    $sql = "DELETE FROM employee WHERE empId= '" . $id . "';";
    //echo($sql);
    mysql_query($sql) or die(mysql_error());
    print("User " . $id . " deleted from the database.");
    print("Return to <a href='index.php'>main page.</a>");


?>