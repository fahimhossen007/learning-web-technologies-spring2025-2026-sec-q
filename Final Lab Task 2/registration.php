<?php
session_start();

if (isset($_POST['submit'])) {
    if ($_POST['password'] === $_POST['confirm_password']) {
        $_SESSION['registered_user'] = [
            'name'     => $_POST['name'],
            'email'    => $_POST['email'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'gender'   => $_POST['gender'],
            'dob'      => $_POST['day'] . "/" . $_POST['month'] . "/" . $_POST['year']
        ];
        header('location: login.php');
        exit();
    } else {
        echo "Passwords do not match!";
    }
}
?>

<?php include('header.php'); ?>

<form method="POST" action="">
    <fieldset>
        <legend><b>REGISTRATION</b></legend>
        <table width="100%">
            <tr>
                <td>Name</td>
                <td>: <input type="text" name="name"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td>Email</td>
                <td>: <input type="email" name="email"> <abbr title="sample@example.com"><b>i</b></abbr></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td>User Name</td>
                <td>: <input type="text" name="username"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td>Confirm Password</td>
                <td>: <input type="password" name="confirm_password"></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other
                    </fieldset>
                </td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="text" name="day" size="2"> /
                        <input type="text" name="month" size="2"> /
                        <input type="text" name="year" size="4"> <i>(dd/mm/yyyy)</i>
                    </fieldset>
                </td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<?php include('footer.php'); ?>