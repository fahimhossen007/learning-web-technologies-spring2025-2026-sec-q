<?php
$gender = "";

if(isset($_POST['submit'])){
    $gender = $_POST['gender'];
}
if($gender != ""){
    echo "Gender: " . $gender;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Retain Selected Gender</h2>

<form method="post">
  Gender:
  
  <input type="radio" name="gender" value="Male"
  <?php if($gender=="Male") echo "checked"; ?>> Male
  
  <input type="radio" name="gender" value="Female"
  <?php if($gender=="Female") echo "checked"; ?>> Female
  
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>