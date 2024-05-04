<?php
class TransactionController {
    private $conn;
    
    public function __construct($conn) {
        if (!$conn instanceof PDO) { 
            throw new Exception("Koneksi database tidak valid.");
        }
        $this->conn = $conn;
    }

    public function listTransactions() {
        $transactionModel = new Transaction($this->conn);
        $transactions = $transactionModel->getAllTransactions();
        include '../app/views/transactions_list.php';
    }
}
?>