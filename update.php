<?php
    require_once("db_connect.php");
    
    $id=$_REQUEST['id'];
    $sql = "SELECT * FROM employee WHERE empId = '" . $id . "';";
     //echo($sql);
     $result = mysql_query($sql) or die(mysql_error());
     
     $row = mysql_fetch_array($result) or die(mysql_error());
    
?>
<html lang="en">
<head>
    <title>Insert Employee</title>
</head>
<body>
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php print($id); ?>" />
        <p>Last Name<br/>
        <input type="text" value="<?php print($row['lastName']) ?>" name="last"/></p>
        
        <p>First Name<br/>
        <input type="text" value="<?php print($row['firstName']) ?>" name="first"/></p>
        
        <p>Department<br/>
        <select name="department">
            <option <?php if($row['department']==1){ print('selected'); }   ?> value="1">Accounting</option>
            <option <?php if($row['department']==2){ print('selected'); }   ?> value="2">Sales</option>
            <option <?php if($row['department']==3){ print('selected'); }   ?> value="3">Information Technology</option>
            <option <?php if($row['department']==4){ print('selected'); }   ?> value="4">Management</option>
        </select>
        
        <p>Position<br/>
        <input type="text" value="<?php print($row['position']) ?>" name="position"/></p>
        
        <p>Salary<br/>
        <input type="text" name="salary" value="<?php print($row['salary']) ?>"/></p>
        
        <input type="submit" value="Update Information" />
    </form>
</body>
</html>
