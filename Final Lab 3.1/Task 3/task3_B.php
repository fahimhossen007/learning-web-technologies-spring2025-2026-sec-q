
<!DOCTYPE html>
<html>
<body>

<h2>Same Page</h2>

<form method="post">
  Date of Birth: <input type="date" name="dob">
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $dob = $_POST['dob'];
}
if(isset($dob)){
    echo "Date of Birth: " . $dob;
}
?>

</body>
</html>