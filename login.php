<?php
$username = filter_input(INPUT_POST, 'uuname');
$password = filter_input(INPUT_POST, 'ppname');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cart";

session_start(); 

$error = '';

if (isset($_POST['submit'])) {
    if (empty($username)) {
        echo '<script>alert("Username is Invalid")</script>';
        echo '<script>window.location="register.php"</script>';
    } else if (empty($password)) {
        echo '<script>alert("Password is Invalid")</script>';
        echo '<script>window.location="register.php"</script>';
    } else {
        
        $username = $_POST['uuname'];
        $password = $_POST['ppname'];
        
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        
        $query = "SELECT * FROM registration WHERE username= '$username' AND password = '$password' LIMIT 1";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        if ($stmt->fetch()) {
            $_SESSION['username'] = $username;
            header("location: index.php");
        } else {
            echo '<script>alert("Details are invalid")</script>';
            echo '<script>window.location="register.php"</script>';        
        }
        mysqli_close($conn);
    }
}
