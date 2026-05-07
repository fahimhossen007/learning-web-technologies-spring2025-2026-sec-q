<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact_no'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "UPDATE employees SET name='$name', contact_no='$contact', username='$user', password='$pass' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>