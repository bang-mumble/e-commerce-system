<!-- ECommerceSystem.php -->
<?php

include 'User.php';
include 'Product.php';
include 'Order.php';

// Create a user
$user = new User(1, 'john_doe', 'john.doe@example.com');

// Create products
$product1 = new Product(101, 'Laptop', 999.99);
$product2 = new Product(102, 'Smartphone', 499.99);

// Create an order
$order = new Order(501, $user);

// Add products to the order
$order->addProduct($product1);
$order->addProduct($product2);

// Display order information
$order->displayInfo();
?>
