
<!DOCTYPE html>
<html>
<body>

<h2> Same Page</h2>

<form method="post">
  Gender:
  <input type="radio" name="gender" value="Male"> Male
  <input type="radio" name="gender" value="Female"> Female
  
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $gender = $_POST['gender'];
}
if(isset($gender)){
    echo "Gender: " . $gender;
}
?>

</body>
</html>