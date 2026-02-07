<?php

// AJAX request script
session_start();
// biztonsagi ellenorzes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sku'])) {

    $sku = $_POST['sku']; // Retrieve the 'sku' value from the POST request
    
    // Assuming $_SESSION['cart'] is an array containing SKUs
    $key = array_search($sku, $_SESSION['cart']); // Find the key of the SKU in the session cart array
    
    if ($key !== false) { // Check if the SKU exists in the cart
        unset($_SESSION['cart'][$key]); // Remove the SKU from the session cart array

        // Indexek visszarendezese mivel az unset otthagy egy ures indexet
        $sorted = array_values($_SESSION['cart']);
        $_SESSION['cart'] = $sorted;
    }
}


