<?php
session_start();

$message = "";
if (isset($_POST['submit'])) {
    if (isset($_SESSION['registered_user'])) {
        $user = $_SESSION['registered_user'];
        
        if ($_POST['email'] === $user['email']) {
            $message = "Your password is: " . $user['password'];
        } else {
            $message = "Email not found.";
        }
    } else {
        $message = "No user registered.";
    }
}
?>

<?php include('header.php'); ?>

<form method="POST" action="">
    <fieldset>
        <legend><b>FORGOT PASSWORD</b></legend>
        <table>
            <tr>
                <td>Enter Email</td>
                <td>: <input type="email" name="email"></td>
            </tr>
        </table>
        <hr>
        <input type="submit" name="submit" value="Submit">
        <br><br>
        <?php echo $message; ?>
    </fieldset>
</form>

<?php include('footer.php'); ?>