<?php

    require_once("db_connect.php");

    $last = $_REQUEST['last'];
    $first= $_REQUEST['first'];
    $department= $_REQUEST['department'];
    $position= $_REQUEST['position'];
    $salary= $_REQUEST['salary'];
    
    //echo($last . ' ' . $first . ' ' . $department . ' ' . $position . ' ' . $salary);
    
    $sql= "INSERT INTO employee VALUES (''," .
                                        "'" . $last . "'," .
                                        "'" . $first . "'," .
                                        "'" . $department . "'," .
                                        "'" . $position . "'," .
                                        "'" . $salary . "')";
                                        
    mysql_query($sql);
    mysql_close($conn);
    
    echo($last . " successfully added to the database.");
    echo("<br/>Go back to <a href='index.php'>main page.</a>")
                                        
    //echo($sql);
    
    
?>