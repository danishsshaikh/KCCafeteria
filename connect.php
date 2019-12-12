<?php
$name = filter_input(INPUT_POST, 'nname');
$username = filter_input(INPUT_POST, 'uname');
$email = filter_input(INPUT_POST, 'ename');
$password = filter_input(INPUT_POST, 'pname');

if (!empty($name)) {
    if (!empty($username)) {
        if (!empty($email)) {
            if (!empty($password)) {
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "cart";
                // Create connection
                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()) {
                    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
                } else {
                    $sql = "INSERT INTO registration (name, username, email, password) values ('$name','$username','$email','$password')";
                    if ($conn->query($sql)) {
                        header("location: register.php");
                    } else {
                        echo "Error: " . $sql . "" . $conn->error;
                    }
                    $conn->close();
                }
            } else {
                header("location: register.php");
                die();
            }
        } else {
            header("location: register.php");
            die();
        }
    } else {
        header("location: register.php");
        die();
    }
} else {
    header("location: register.php");
    die();
}
