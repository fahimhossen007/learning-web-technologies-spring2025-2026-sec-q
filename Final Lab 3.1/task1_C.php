<?php
$name = "";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
}
?>

<form method="post">
  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <input type="submit" name="submit">
</form>

<?php
echo $name;
?>