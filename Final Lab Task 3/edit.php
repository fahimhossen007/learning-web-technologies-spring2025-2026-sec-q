<?php include "config.php"; ?>

<?php
$id = $_GET['id'];
$product = $_SESSION['products'][$id];
?>

<h2>Edit Product</h2>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    Name: <input type="text" name="name" value="<?php echo $product['name']; ?>"><br>
    Price: <input type="text" name="price" value="<?php echo $product['price']; ?>"><br>

    <button name="update">Update</button>
</form>