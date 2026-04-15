<?php
session_start();

if (isset($_POST['submit'])) {
    if (isset($_SESSION['registered_user'])) {
        $regUser = $_SESSION['registered_user'];
        
        if ($_POST['username'] === $regUser['username'] && $_POST['password'] === $regUser['password']) {
            $_SESSION['status'] = 'true';
            
            if (isset($_POST['remember_me'])) {
                setcookie('status', 'true', time() + 3600, '/');
            }
            
            header('location: dashboard.php');
            exit();
        } else {
            echo "Invalid User Name or Password!";
        }
    } else {
        echo "No user registered yet!";
    }
}
?>

<?php include('header.php'); ?>

<form method="POST" action="">
    <fieldset>
        <legend><b>LOGIN</b></legend>
        <table>
            <tr>
                <td>User Name</td>
                <td>: <input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password"></td>
            </tr>
        </table>
        <hr>
        <input type="checkbox" name="remember_me"> Remember Me <br><br>
        <input type="submit" name="submit" value="Submit">
        <a href="forgot_password.php">Forgot Password?</a>
    </fieldset>
</form>

<?php include('footer.php'); ?>