<?php
session_start();
unset($_SESSION['logged_in']);
// Redirect to the login page:
header('Location: index.php');
?>