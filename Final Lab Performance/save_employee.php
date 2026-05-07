<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact_no'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO employees (name, contact_no, username, password) 
            VALUES ('$name', '$contact', '$user', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Employee Registered Successfully!";
        echo "<br><a href='register.php'>Go Back</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>