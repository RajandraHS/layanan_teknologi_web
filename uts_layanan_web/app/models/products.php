<?php
class Product {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllProducts() {
        $stmt = $this->conn->prepare("SELECT * FROM produk");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>