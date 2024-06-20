<?php
require '../config/database.php';
require '../app/models/categories.php';
require '../app/models/products.php';
require '../app/models/suppliers.php';
require '../app/models/transactions.php';
require '../app/controllers/CategoryController.php';
require '../app/controllers/ProductController.php';
require '../app/controllers/SupplierController.php';
require '../app/controllers/TransactionController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'listProducts';
$controller = new ProductController($conn);

switch ($action) {
    case 'listProducts':
        $controller->listProducts();
        break;
    case 'listCategories':
        $controller = new CategoryController($conn);
        $controller->listCategories();
        break;
    case 'listSuppliers':
        $controller = new SupplierController($conn);
        $controller->listSuppliers();
        break;
    case 'listTransactions':
        $controller = new TransactionController($conn);
        $controller->listTransactions();
        break;
    default:
        echo "Action not recognized.";
        break;
}
