<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM employees WHERE username='$user' AND password='$pass'");
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
    } else {
        echo "Invalid Username or Password!";
    }
}
?>