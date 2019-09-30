<?php
$name = filter_input(INPUT_POST, 'nnname');
$username = filter_input(INPUT_POST, 'uuname');
$email = filter_input(INPUT_POST, 'eename');
$password = filter_input(INPUT_POST, 'ppname');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['uuname']) || empty($_POST['ppname'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['uuname'];
$password = $_POST['ppname'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "login");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password from registration where username=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: index.php"); // Redirecting To Profile Page
}
mysqli_close($conn); // Closing Connection
}
?>