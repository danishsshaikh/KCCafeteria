<?php
$classno = filter_input(INPUT_POST, 'class_no');
$mobileno = filter_input(INPUT_POST, 'mobilenumber');
if (!empty($classno)) {
    if (!empty($mobileno)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "cart";
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO tbl_user (classno, mobilemo) values ('$classno','$mobileno')";
            if ($conn->query($sql)) {
                echo '<script>alert("Congrats, your order has been placed ^-^")</script>';
                //header("location: index.php");
            } else {
                echo "Error: " . $sql . "" . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo '<script>alert("Check the class number please")</script>';
        die();
    }
} else {
    echo '<script>alert("Check the mobile number please")</script>';
    die();
}
?>