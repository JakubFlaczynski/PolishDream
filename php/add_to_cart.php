<?php
session_start();
header('Content-Type: application/json');  // Ensure we are returning a JSON response

// Include database connection
include_once('../includes/connection.php');

// Check if cart exists, if not, create it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    // Fetch product details from the database
    $stmt = $conn->prepare("SELECT * FROM menu WHERE ID = ?");
    $stmt->execute([$productId]);
    $product = $stmt->fetch();

    if ($product) {
        // Create cart item based on product info
        $cartItem = [
            'id' => $product['ID'],
            'name' => $product['Name'],
            'price' => $product['Price'],
            'quantity' => 1
        ];

        // Check if product already exists in cart
        $productExistsInCart = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $product['ID']) {
                $item['quantity'] += 1;
                $productExistsInCart = true;
                break;
            }
        }

        // If product not in cart, add new item
        if (!$productExistsInCart) {
            $_SESSION['cart'][] = $cartItem;
        }

        // Respond with success message and cart count
        echo json_encode([
            'status' => 'success',
            'cartCount' => count($_SESSION['cart'])
        ]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Product not found']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No product ID provided']);
}
