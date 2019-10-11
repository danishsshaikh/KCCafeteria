<?php
$username = filter_input(INPUT_POST, 'adminU');
$password = filter_input(INPUT_POST, 'adminP');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cart";
// Create connection
//$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

session_start(); // Starting Session

//$error = ''; // Variable To Store Error Message
//
//if (isset($_POST['Submit'])) {
//if (empty($username)){
//echo '<script>alert("Username is Invalid")</script>'; 
//}
//else if (empty($password)){
//echo '<script>alert("Password is Invalid")</script>';
//}
//else{
//// Define $username and $password
//$username = $_POST['adminU'];
//$password = $_POST['adminP'];
//// mysqli_connect() function opens a new connection to the MySQL server.
//$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
//// SQL query to fetch information of registerd users and finds user match.
//$query = "SELECT * FROM admin WHERE username= '$username' AND password = '$password' LIMIT 1";
//// To protect MySQL injection for Security purpose
//$stmt = $conn->prepare($query);
//$stmt->bind_param("s", $username);
//$stmt->execute();
//$stmt->bind_result($username);
//$stmt->store_result();
//if($stmt->fetch())
//{
$_SESSION['adminU'] = "admin";
header("location: admin/register.php"); 
//}
mysqli_close($conn); 
//}
//}
?>