<!-- 10. Create an interface Logger with a method log($message). Create a class FileLogger that implements
this interface and prints "Logging to file: [message]". Test it. -->



<?php
// Define the Logger interface
interface Logger
{
    public function log($message);
}

// Create a class that implements the Logger interface
class FileLogger implements Logger
{
    // Implement the log method
    public function log($message)
    {
        echo "Logging to file: " . $message;
    }
}

// Test the implementation
$logger = new FileLogger();
$logger->log("User logged in");
