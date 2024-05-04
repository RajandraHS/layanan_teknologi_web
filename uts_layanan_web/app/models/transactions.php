<?php
class Transaction {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllTransactions() {
        $stmt = $this->conn->prepare("SELECT * FROM transaksi");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>