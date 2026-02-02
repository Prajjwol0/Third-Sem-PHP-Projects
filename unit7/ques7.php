<!-- 7. Create a class ElectricCar that extends the Car class. Add a property $batteryCapacity and a method
showElectricCar() to display all details. Test with an object -->

<?php
// Base Car class
class Car
{
    private $make;
    private $model;

    public function __construct(string $make, string $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to get basic car info
    public function getCarInfo(): string
    {
        return "Car Make: " . $this->make . ", Model: " . $this->model;
    }
}

// ElectricCar class extending Car
class ElectricCar extends Car
{
    private $batteryCapacity; // in kWh

    public function __construct(string $make, string $model, float $batteryCapacity)
    {
        // Call parent constructor to initialize make and model
        parent::__construct($make, $model);

        // Initialize batteryCapacity
        $this->batteryCapacity = $batteryCapacity;
    }

    // Method to display all electric car details
    public function showElectricCar(): string
    {
        // Get base car info from parent class
        $baseInfo = $this->getCarInfo();

        // Add battery info
        return $baseInfo . ", Battery Capacity: " . $this->batteryCapacity . " kWh";
    }
}

// Test the ElectricCar class
$myElectricCar = new ElectricCar("Tesla", "Model S", 100);

// Display electric car details
echo $myElectricCar->showElectricCar();
