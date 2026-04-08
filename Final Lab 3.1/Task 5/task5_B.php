
<!DOCTYPE html>
<html>
<body>

<h2>Same Page</h2>

<form method="post">
  Degree:
  <input type="checkbox" name="degree[]" value="SSC"> SSC
  <input type="checkbox" name="degree[]" value="HSC"> HSC
  <input type="checkbox" name="degree[]" value="BSc"> BSc
  
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $degree = $_POST['degree'];
}
if(isset($degree)){
    echo "Degree: ";
    foreach($degree as $d){
        echo $d . " ";
    }
}
?>

</body>
</html>