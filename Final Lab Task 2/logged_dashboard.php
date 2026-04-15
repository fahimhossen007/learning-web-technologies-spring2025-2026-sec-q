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
            <h3>Welcome <?php echo $user['name']; ?></h3>
        </td>
    </tr>
</table>

<?php include('footer.php'); ?>