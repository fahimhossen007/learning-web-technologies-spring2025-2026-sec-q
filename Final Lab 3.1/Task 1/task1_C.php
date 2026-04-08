<?php
$name = "";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
}
echo "Name : ". $name;
?>
<!DOCTYPE html>
<html>
<body>

<h2>Retain Value</h2>

<form method="post">
  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <input type="submit" name="submit">
</form>


</body>
</html>

