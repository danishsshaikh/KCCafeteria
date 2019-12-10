<?php
session_start();
if (session_destroy()) // Destroying All Sessions 
{
    header("Location: register.php"); // Redirecting To Home Page
}
