<?php
session_start();           // Starts the session to access session variables
session_unset();           // Unsets all session variables
session_destroy();         // Destroys the session completely
header("Location: index.php"); // Redirects the user to the login page (index.php)
exit();                    // Ensures no further code is executed
?>
