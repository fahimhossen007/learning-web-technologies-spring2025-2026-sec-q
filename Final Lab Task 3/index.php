<?php include "config.php"; ?>

<h2>Product List</h2>

<a href="add.php">Add Product</a><br><br>

<?php
foreach($_SESSION['products'] as $id => $p){
    echo $p['name']." - ".$p['price'];

    echo " 
    <a href='edit.php?id=$id'>Edit</a>
    <a href='delete.php?id=$id'>Delete</a>
    <br>";
}
?>