<?php
class ProductController {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function listProducts() {
        $productModel = new Product($this->conn);
        $products = $productModel->getAllProducts();
        include '../app/views/products_list.php';
    }
}
?>