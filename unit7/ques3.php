<!-- 
4. Add a method getCarInfo() to the Car class that returns a string with the car’s
make and model. Call the method and print the output. -->


<?php
// Create a class named Car
class Car
{
    // Public properties
    public $make;
    public $model;
}

// Instantiate the Car class
$car = new Car();

// Assign values to the properties
$car->make = "Toyota";
$car->model = "Corolla";

// Echo the property values
echo "Make: " . $car->make . "<br>";
echo "Model: " . $car->model;
