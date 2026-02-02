<!-- 13. Create a User class representing a database entity with $id, $name, $email, $createdAt. Use
DateTime for $createdAt. Add methods getUserInfo() and daysSinceCreation(). Test with multiple objects.
 -->

 <?php
class User
{
    private $id;
    private $name;
    private $email;
    private $createdAt;

    // Constructor sets user data and creation time
    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;

        // Set createdAt to current date and time
        $this->createdAt = new DateTime();
    }

    // Return user information as a string
    public function getUserInfo(): string
    {
        return "ID: {$this->id}, Name: {$this->name}, Email: {$this->email}";
    }

    // Calculate how many days ago the user was created
    public function daysSinceCreation(): int
    {
        $currentDate = new DateTime();
        $difference = $this->createdAt->diff($currentDate);

        return $difference->days;
    }
}

// Test with multiple User objects
$user1 = new User(1, "Alice", "alice@example.com");
$user2 = new User(2, "Bob", "bob@example.com");

echo $user1->getUserInfo() . "<br>";
echo "Days since creation: " . $user1->daysSinceCreation() . "<br><br>";

echo $user2->getUserInfo() . "<br>";
echo "Days since creation: " . $user2->daysSinceCreation();