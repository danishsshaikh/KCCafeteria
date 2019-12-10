<?php
$connection = mysqli_connect("localhost", "root", "", "cart");

if (isset($_POST['updatebtn'])) {
    $n = $_POST['edit_name'];
    $uu = $_POST['edit_uname'];
    $e = $_POST['edit_email'];
    $p = $_POST['edit_password'];

    $query = "UPDATE registration SET name='$n', username = '$uu', email='$e', password = '$p' WHERE username = '$uu' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: register.php');
    } else {
        $_SESSION['status'] = "Your Data is not Updated";
        header('Location: register.php');
    }
}
