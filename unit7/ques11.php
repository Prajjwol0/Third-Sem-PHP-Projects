<!-- 11. Create a class BlogPost with private properties $title, $content, $createdAt. Use DateTime to set
$createdAt to the current date in the constructor. Add a method daysSinceCreated() to calculate how many
days ago it was created. -->

<?php
class BlogPost
{
    private $title;
    private $content;
    private $createdAt;

    // Constructor sets title, content, and current date/time
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;

        // Set createdAt to the current date and time
        $this->createdAt = new DateTime();
    }

    // Calculate how many days ago the post was created
    public function daysSinceCreated(): int
    {
        $currentDate = new DateTime();

        // Calculate the difference between now and createdAt
        $difference = $this->createdAt->diff($currentDate);

        // Return the number of days
        return $difference->days;
    }
}

// Test the BlogPost class
$post = new BlogPost("My First Post", "This is the blog content.");

echo "Days since created: " . $post->daysSinceCreated();
