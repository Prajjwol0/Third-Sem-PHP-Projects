
<!-- 9. Add magic methods __construct() and __destruct() to the Car class to print messages when objects are
created or destroyed. Add __toString() to return car details. -->

<?php
class Car
{
    private $make;
    private $model;

    // Called automatically when an object is created
    public function __construct(string $make, string $model)
    {
        $this->make = $make;
        $this->model = $model;

        echo "Car object created.<br>";
    }

    // Called automatically when an object is destroyed
    public function __destruct()
    {
        echo "Car object destroyed.<br>";
    }

    // Called when the object is used as a string
    public function __toString(): string
    {
        return "Car Make: " . $this->make . ", Model: " . $this->model;
    }
}

// Test the magic methods
$car = new Car("Honda", "Civic");

// Echoing the object calls __toString()
echo $car;
