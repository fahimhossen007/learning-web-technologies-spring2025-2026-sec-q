<?php
$bg = "";

if(isset($_POST['submit'])){
    $bg = $_POST['bg'];
}
if($bg != ""){
    echo "Blood Group: " . $bg;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Retain Selected Blood Group</h2>

<form method="post">
  Blood Group:
  <select name="bg">
    <option value="">Select</option>

    <option value="A+" <?php if($bg=="A+") echo "selected"; ?>>A+</option>
    <option value="B+" <?php if($bg=="B+") echo "selected"; ?>>B+</option>
    <option value="O+" <?php if($bg=="O+") echo "selected"; ?>>O+</option>
    <option value="AB+" <?php if($bg=="AB+") echo "selected"; ?>>AB+</option>

  </select>

  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>