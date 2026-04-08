<?php
if(isset($_POST['degree'])){
    $degree = $_POST['degree'];

    echo "Selected Degrees: ";

    foreach($degree as $d){
        echo $d . " ";
    }
}
?>