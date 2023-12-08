<!-- Order.php -->
<?php

class Order {
    private $orderId;
    private $user;
    private $products;

    public function __construct($orderId, $user) {
        $this->orderId = $orderId;
        $this->user = $user;
        $this->products = [];
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function displayInfo() {
        echo "Order ID: " . $this->orderId . "<br>";
        echo "User Information:<br>";
        $this->user->displayInfo();
        echo "Products in the Order:<br>";
        foreach ($this->products as $product) {
            $product->displayInfo();
            echo "<br>";
        }
    }
}
?>
