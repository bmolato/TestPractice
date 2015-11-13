<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Insert Employee</title>
</head>
<body>
    <form action="insert_process.php" method="post">
        <p>Last Name<br/>
        <input type="text" name="last"/></p>
        
        <p>First Name<br/>
        <input type="text" name="first"/></p>
        
        <p>Department<br/>
        <select name="department">
            <option value="1">Accounting</option>
            <option value="2">Sales</option>
            <option value="3">Information Technology</option>
            <option value="4">Management</option>
        </select>
        
        <p>Position<br/>
        <input type="text" name="position"/></p>
        
        <p>Salary<br/>
        <input type="text" name="salary"/></p>
        
        <input type="submit" value="Save Information" />
    </form>
</body>
</html>
