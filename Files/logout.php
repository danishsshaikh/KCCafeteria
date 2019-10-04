<?php
session_start();
if(session_destroy()) // Destroying All Sessions 
{
header("Location: Register.php"); // Redirecting To Home Page
}
?>