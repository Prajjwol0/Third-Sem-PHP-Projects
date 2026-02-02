<?php
// The model handles data and database logic
class ProductModel
{
    private $products;

    public function __construct()
    {
        // For simplicity, we'll use a hardcoded array instead of a real database 
        $this->products = [
            ['id' => 1, 'name' => 'Aple', 'price' => 0.5],
            ['id' => 2, 'name' => 'Banana', 'price' => 0.3],
            ['id' => 3, 'name' => 'Orange', 'price' => 0.7],
        ];
    }

    // Function to get all products
    public function getAllProducts()
    {
        return $this->products;
    }
}
?>