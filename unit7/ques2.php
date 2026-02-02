<!-- 2. Add a constructor to the User class that accepts $name and $email and sets
the properties automatically. Instantiate an object and display the values. -->

<?php
// Create a class named User
class User
{
    // Public properties
    public $name;
    public $email;

    // Constructor runs automatically when an object is created
    public function __construct(string $name, string $email)
    {
        // Assign constructor parameters to class properties
        $this->name = $name;
        $this->email = $email;
    }
}

// Instantiate the User class with values
$user = new User("John Doe", "john@example.com");

// Display the property values
echo "Name: " . $user->name . "<br>";
echo "Email: " . $user->email;
