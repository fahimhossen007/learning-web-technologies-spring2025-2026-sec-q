<?php
session_start();

// user store
if(!isset($_SESSION['users'])){
    $_SESSION['users'] = [];
}

// product store
if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}
?>