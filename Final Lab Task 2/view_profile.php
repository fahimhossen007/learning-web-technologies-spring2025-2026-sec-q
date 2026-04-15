<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}
$user = $_SESSION['registered_user'];
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
            <fieldset>
                <legend><b>PROFILE</b></legend>
                <table width="100%">
                    <tr>
                        <td width="150px">Name</td>
                        <td>: <?php echo $user['name']; ?></td>
                        <td rowspan="4" align="center">
                            <img src="user.png" width="100px" height="100px"><br>
                            <a href="change_pp.php">Change</a>
                        </td>
                    </tr>
                    <tr><td colspan="2"><hr></td></tr>
                    <tr>
                        <td>Email</td>
                        <td>: <?php echo $user['email']; ?></td>
                    </tr>
                    <tr><td colspan="2"><hr></td></tr>
                    <tr>
                        <td>Gender</td>
                        <td>: <?php echo $user['gender']; ?></td>
                    </tr>
                    <tr><td colspan="2"><hr></td></tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>: <?php echo $user['dob']; ?></td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr>
                        <td colspan="3">
                            <a href="edit_profile.php">Edit Profile</a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </td>
    </tr>
</table>

<?php include('footer.php'); ?>