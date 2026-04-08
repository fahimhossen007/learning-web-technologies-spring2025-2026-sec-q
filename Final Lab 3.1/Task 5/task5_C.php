<?php
$degree = [];

if(isset($_POST['submit'])){
    $degree = $_POST['degree'];
}
if(!empty($degree)){
    echo "Degree: ";
    foreach($degree as $d){
        echo $d . " ";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Retain Selected Degrees</h2>

<form method="post">
  Degree:

  <input type="checkbox" name="degree[]" value="SSC"
  <?php if(in_array("SSC",$degree)) echo "checked"; ?>> SSC

  <input type="checkbox" name="degree[]" value="HSC"
  <?php if(in_array("HSC",$degree)) echo "checked"; ?>> HSC

  <input type="checkbox" name="degree[]" value="BSc"
  <?php if(in_array("BSc",$degree)) echo "checked"; ?>> BSc
  
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>