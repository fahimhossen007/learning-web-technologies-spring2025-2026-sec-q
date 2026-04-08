
<!DOCTYPE html>
<html>
<body>

<h2>Same Page</h2>

<form method="post">
  Email: <input type="email" name="email">
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
if(isset($email)){
    echo "Email: " . $email;
}
}
?>

</body>
</html>