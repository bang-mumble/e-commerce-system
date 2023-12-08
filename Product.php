<!-- Product.php -->
<?php

class Product {
    private $productId;
    private $productName;
    private $price;

    public function __construct($productId, $productName, $price) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->price = $price;
    }

    public function displayInfo() {
        echo "Product ID: " . $this->productId . "<br>";
        echo "Product Name: " . $this->productName . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }
}
?>
