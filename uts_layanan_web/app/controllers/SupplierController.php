<?php
class SupplierController {
    private $conn;

    public function __construct($conn) {
        if (!$conn instanceof PDO) { 
            throw new Exception("Koneksi database tidak valid.");
        }
        $this->conn = $conn;
    }

    public function listSuppliers() {
        $supplierModel = new Supplier($this->conn); 
        $suppliers = $supplierModel->getAllSuppliers();
        include '../app/views/suppliers_list.php';
    }
}

?>