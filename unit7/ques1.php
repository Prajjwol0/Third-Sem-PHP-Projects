<!-- 1. Create a class named User with public properties $name and $email. Instantiate the class, assign values, and echo them. -->
 <?php
// Create a class named User
class User
{
    // Public properties can be accessed from outside the class
    public $name;
    public $email;
}

// Instantiate (create an object of) the User class
$user = new User();

// Assign values to the public properties
$user->name = "John Doe";
$user->email = "john@example.com";

// Echo the property values
echo "Name: " . $user->name . "<br>";
echo "Email: " . $user->email;
?>