<!-- 15. Create a PageController class with a method getMessage(). Create a PageTemplate class with a method render($message). Use both classes to display a message like "Welcome to OOP in PHP!". -->
 
 
 <?php
// PageController class
class PageController
{
    // Method to return a message
    public function getMessage(): string
    {
        return "Welcome to OOP in PHP!";
    }
}

// PageTemplate class
class PageTemplate
{
    // Method to render a message
    public function render(string $message): void
    {
        echo $message;
    }
}

// Use both classes
$controller = new PageController();
$template = new PageTemplate();

// Get message from controller and render it
$message = $controller->getMessage();
$template->render($message);
