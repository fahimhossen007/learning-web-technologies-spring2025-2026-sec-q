<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}

$message = "";
if (isset($_POST['submit'])) {
    $user = &$_SESSION['registered_user'];
    $curr_pass = $_POST['current_password'];
    $new_pass = $_POST['new_password'];
    $re_pass = $_POST['re_password'];

    if ($curr_pass == $user['password']) {
        if ($new_pass == $re_pass) {
            if ($new_pass != $curr_pass) {
                $user['password'] = $new_pass;
                $message = "Password changed successfully!";
            } else {
                $message = "New password cannot be the same as current password.";
            }
        } else {
            $message = "New password and Retype password do not match.";
        }
    } else {
        $message = "Current password is incorrect.";
    }
}
?>

<?php include('header.php'); ?>

<table border="1" width="100%" height="300px">
    <tr>
        <td width="30%" valign="top">
            <b>Account</b>
            <hr>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="view_profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="change_pp.php">Change Profile Picture</a></li>
                <li><a href="change_pass.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </td>
        <td valign="top">
            <form method="POST" action="">
                <fieldset>
                    <legend><b>CHANGE PASSWORD</b></legend>
                    <table>
                        <tr>
                            <td>Current Password</td>
                            <td>: <input type="password" name="current_password"></td>
                        </tr>
                        <tr>
                            <td style="color:green">New Password</td>
                            <td>: <input type="password" name="new_password"></td>
                        </tr>
                        <tr>
                            <td style="color:red">Retype New Password</td>
                            <td>: <input type="password" name="re_password"></td>
                        </tr>
                    </table>
                    <hr>
                    <input type="submit" name="submit" value="Submit">
                    <br><br>
                    <?php echo $message; ?>
                </fieldset>
            </form>
        </td>
    </tr>
</table>

<?php include('footer.php'); ?>