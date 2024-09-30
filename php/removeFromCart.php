<?php
session_start();

if (isset($_POST['item_id']) && isset($_SESSION['cart'])) {
    $item_id = $_POST['item_id'];

    unset($_SESSION['cart'][$item_id]);

    $_SESSION['cart'] = array_values($_SESSION['cart']);

    header("Location: ../cart.php"); 
    exit();
}
?>