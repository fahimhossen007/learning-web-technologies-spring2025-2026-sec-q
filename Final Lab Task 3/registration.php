<?php include "config.php"; ?>

<?php
if(isset($_POST['register'])){
    $id = count($_SESSION['users']) + 1;

    $_SESSION['users'][$id] = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "role" => $_POST['role']
    ];

    echo "Registration Successful! <a href='login.php'>Login</a>";
}
?>

<h2>Register</h2>
<form method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>

    Role:
    <select name="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select><br>

    <button name="register">Register</button>
</form>