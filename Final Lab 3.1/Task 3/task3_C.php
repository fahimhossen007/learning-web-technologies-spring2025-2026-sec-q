<?php
$dob = "";

if(isset($_POST['submit'])){
    $dob = $_POST['dob'];
}
if($dob != ""){
    echo "Date of Birth: " . $dob;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Retain Value</h2>

<form method="post">
  Date of Birth: 
  <input type="date" name="dob" value="<?php echo $dob; ?>">
  
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>