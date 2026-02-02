<!-- 8. Add a static property $vehicleCount to Car to track the number of objects created. Increment it in the
constructor and add a static method getVehicleCount() to display it. Test by creating multiple objects.
 -->

 <?php
// Car class
class Car
{
    private $make;
    private $model;

    // Static property to track number of Car objects
    private static $vehicleCount = 0;

    // Constructor
    public function __construct(string $make, string $model)
    {
        $this->make = $make;
        $this->model = $model;

        // Increment static vehicle count whenever a new object is created
        self::$vehicleCount++;
    }

    // Method to display car info
    public function getCarInfo(): string
    {
        return "Car Make: " . $this->make . ", Model: " . $this->model;
    }

    // Static method to get vehicle count
    public static function getVehicleCount(): int
    {
        return self::$vehicleCount;
    }
}

// Test by creating multiple Car objects
$car1 = new Car("Toyota", "Corolla");
$car2 = new Car("Honda", "Civic");
$car3 = new Car("Ford", "Mustang");

// Display info for each car
echo $car1->getCarInfo() . "<br>";
echo $car2->getCarInfo() . "<br>";
echo $car3->getCarInfo() . "<br>";

// Display total number of vehicles created
echo "Total Vehicles: " . Car::getVehicleCount();
