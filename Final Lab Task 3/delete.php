<?php
include "config.php";

$id = $_GET['id'];
unset($_SESSION['products'][$id]);

header("Location: index.php");
?>