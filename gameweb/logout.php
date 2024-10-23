<?php 
session_start();
session_unset();
session_destroy();

// Redirect to signup page
header('Location: signup.html');  // Ensure you have a signup.html
exit();
?>
