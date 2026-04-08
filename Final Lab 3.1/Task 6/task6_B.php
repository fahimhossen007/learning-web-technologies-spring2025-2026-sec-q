
<!DOCTYPE html>
<html>
<body>

<h2>Same Page</h2>

<form method="post">
  Blood Group:
  <select name="bg">
    <option value="">Select</option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="O+">O+</option>
    <option value="AB+">AB+</option>
  </select>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $bg = $_POST['bg'];
}
if(isset($bg)){
    echo "Blood Group: " . $bg;
}
?>

</body>
</html>