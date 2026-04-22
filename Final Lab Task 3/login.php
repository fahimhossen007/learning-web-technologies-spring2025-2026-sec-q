<?php include "config.php"; ?>

<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    foreach($_SESSION['users'] as $user){
        if($user['email'] == $email && $user['password'] == $pass){
            $_SESSION['login'] = $user;
            header("Location: home.php");
            exit();
        }
    }

    echo "Invalid Login!";
}
?>

<h2>Login</h2>
<form method="post">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button name="login">Login</button>
</form>