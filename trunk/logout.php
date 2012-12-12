<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['ID']);
// Delete all session variables
// session_destroy();

// Jump to Home page
header('Location: home.php');

?>