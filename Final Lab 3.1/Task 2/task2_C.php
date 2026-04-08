<?php
$email = "";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
if($email != ""){
    echo "Email: " . $email;
}
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Retain Value</h2>

<form method="post">
  Email: <input type="email" name="email" value="<?php echo $email; ?>">
  <input type="submit" name="submit" value="Submit">
</form>


</body>
</html>