<?php include "config.php"; ?>

<?php
if(isset($_POST['add'])){
    $id = count($_SESSION['products']) + 1;

    $_SESSION['products'][$id] = [
        "name" => $_POST['name'],
        "price" => $_POST['price']
    ];

    header("Location: index.php");
}
?>

<h2>Add Product</h2>

<form method="post">
    Name: <input type="text" name="name"><br>
    Price: <input type="text" name="price"><br>
    <button name="add">Add</button>
</form>