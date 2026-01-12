<!-- 14. Develop a script that logs all session activities to a file named session_log.txt. For example,
when a session is started or a variable is set, append a timestamped message to the log.
 -->

<?php
session_start();

$logFile = "session_log.txt";

// Function to write log
function logSessionActivity($message)
{
    global $logFile;
    $time = date("Y-m-d H:i:s");
    file_put_contents($logFile, "[$time] $message\n", FILE_APPEND);
}

// Log session start
logSessionActivity("Session started");

// Setting session variables
$_SESSION['user_id'] = 101;
logSessionActivity("Session variable 'user_id' set to 101");

$_SESSION['username'] = "admin";
logSessionActivity("Session variable 'username' set to admin");
?>