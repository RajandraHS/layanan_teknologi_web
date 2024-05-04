<?php
class CategoryController {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function listCategories() {
        $categoryModel = new Category($this->conn);
        $categories = $categoryModel->getAllCategories();
        include '../app/views/categories_list.php';
    }
}
?>
