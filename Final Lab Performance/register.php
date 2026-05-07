<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration</title>
    <script src="script.js"></script> </head>
<body>
    <h2>Register New Employee</h2>
    
    <form name="empForm" action="save_employee.php" method="POST" onsubmit="return validateForm()">
        Name: <input type="text" name="name"><br><br>
        Contact No: <input type="text" name="contact_no"><br><br>
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>