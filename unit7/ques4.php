
<!-- 4. Add a method getCarInfo() to the Car class that returns a string with the car’s
make and model. Call the method and print the output. -->

<?php
// Create a class named Car
class Car
{
    // Public properties
    public $make;
    public $model;

    // Method that returns car information as a string
    public function getCarInfo(): string
    {
        return "Car Make: " . $this->make . ", Model: " . $this->model;
    }
}

// Instantiate the Car class
$car = new Car();

// Assign values to properties
$car->make = "Toyota";
$car->model = "Corolla";

// Call the method and print the output
echo $car->getCarInfo();
