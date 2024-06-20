<?php

class Supplier {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllSuppliers() {
        $stmt = $this->conn->prepare("SELECT * FROM supplier");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>