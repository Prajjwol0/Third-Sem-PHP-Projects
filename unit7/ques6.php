<!-- 6. Change the visibility of your User or Car properties to private. Create a public method displayUserInfo()
or displayCarInfo() that returns a string with object details. Test it.
 -->


 
    <?php
    // Define the Car class
    class Car
    {
        // Private properties cannot be accessed directly from outside the class
        private $make;
        private $model;

        // Constructor to initialize the car
        public function __construct(string $make, string $model)
        {
            $this->make = $make;
            $this->model = $model;
        }

        // Public method to display car details
        public function displayCarInfo(): string
        {
            return "Car Make: " . $this->make . ", Model: " . $this->model;
        }
    }

    // Create a Car object
    $car = new Car("Ford", "Mustang");

    // Call the public method to get car info and display it
    echo $car->displayCarInfo();
