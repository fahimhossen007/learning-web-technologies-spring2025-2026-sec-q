<?php 
include 'db.php'; 
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM employees WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
    <script src="script.js"></script>
</head>
<body>
    <h2>Update Employee Information</h2>
    <form name="empForm" action="update_process.php" method="POST" onsubmit="return validateForm()">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
        Contact No: <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>"><br><br>
        Username: <input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>
        Password: <input type="password" name="password" value="<?php echo $row['password']; ?>"><br><br>
        <input type="submit" value="Update Info">
    </form>
</body>
</html>