<?php include "config.php"; ?>

<?php
if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

$user = $_SESSION['login'];

echo "Welcome, ".$user['name']."<br>";
echo "<a href='logout.php'>Logout</a><br><br>";

if($user['role'] == 'admin'){
    echo "<a href='add.php'>Add Product</a><br>";
}
?>

<h2>Product List</h2>

<?php
foreach($_SESSION['products'] as $id => $p){
    echo $p['name']." - ".$p['price'];

    if($user['role'] == 'admin'){
        echo " 
        <a href='edit.php?id=$id'>Edit</a>
        <a href='delete.php?id=$id'>Delete</a>";
    }

    echo "<br>";
}
?>