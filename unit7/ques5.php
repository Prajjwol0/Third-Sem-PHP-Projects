<!-- 5. Add a constructor to your Car class to set $make and $model automatically when creating an object -->
<?php
// Define the Car class
class Car
{
    public $make;
    public $model;

    // Constructor sets make and model automatically
    public function __construct(string $make, string $model)
    {
        $this->make = $make;
        $this->model = $model;
    }
}

// Create a new Car object and set properties automatically
$car = new Car("Honda", "Civic");

// Display the car details
echo "Make: " . $car->make . "<br>";
echo "Model: " . $car->model;
?>