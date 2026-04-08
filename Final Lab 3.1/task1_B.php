<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    echo "Your Name is: " . $name;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2> Same Page</h2>

<form method="post">
  Name: <input type="text" name="name">
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>