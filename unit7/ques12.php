<!-- 12. Create a class Product with private properties $id, $name, $price, and $createdAt (using DateTime
defaulting to current time). Add a method to calculate how many days ago the product was created. -->

<?php
class Product
{
    private $id;
    private $name;
    private $price;
    private $createdAt;

    // Constructor sets product details and creation time
    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

        // Set createdAt to the current date and time
        $this->createdAt = new DateTime();
    }

    // Calculate how many days ago the product was created
    public function daysSinceCreated(): int
    {
        $currentDate = new DateTime();

        // Get the difference between current date and createdAt
        $difference = $this->createdAt->diff($currentDate);

        // Return total days passed
        return $difference->days;
    }
}

// Test the Product class
$product = new Product(1, "Laptop", 75000);

echo "Days since product was created: " . $product->daysSinceCreated();
