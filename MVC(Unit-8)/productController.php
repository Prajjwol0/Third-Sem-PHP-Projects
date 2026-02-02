<?php
// The controller decides what data to fetch and which view to render
require_once 'productModel.php';

class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    // Action to display all products
    public function listProducts()
    {
        // 1. Fetch data from the model
        $products = $this->model->getAllProducts();

        // 2. Pass data to the view
        require 'productView.php';
    }
}

// Simulate a request to list products
$controller = new ProductController();
$controller->listProducts();
?>