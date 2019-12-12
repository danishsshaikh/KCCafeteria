<?php
$username = filter_input(INPUT_POST, 'adminU');
$password = filter_input(INPUT_POST, 'adminP');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cart";

// Create connection
session_start();

$_SESSION['adminU'] = "admin";
header("location: admin/register.php");

mysqli_close($conn);
