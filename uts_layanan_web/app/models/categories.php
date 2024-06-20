<?php
class Category {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCategories() {
        $stmt = $this->conn->prepare("SELECT * FROM kategori");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
