<?php
include "config.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $_SESSION['products'][$id] = [
        "name" => $_POST['name'],
        "price" => $_POST['price']
    ];
}

header("Location: index.php");
?>