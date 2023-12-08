<!-- User.php -->
<?php

class User {
    private $userId;
    private $username;
    private $email;

    public function __construct($userId, $username, $email) {
        $this->userId = $userId;
        $this->username = $username;
        $this->email = $email;
    }

    public function displayInfo() {
        echo "User ID: " . $this->userId . "<br>";
        echo "Username: " . $this->username . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
?>
