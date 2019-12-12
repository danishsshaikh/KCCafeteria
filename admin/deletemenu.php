<?php
$connection = mysqli_connect("localhost", "root", "", "cart");

if (isset($_POST['delete_btn'])) {
    $dn = $_POST['delete_name'];

    $query = "DELETE FROM tbl_product WHERE name='$dn'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: menu.php');
    } else {
        $_SESSION['status'] = "Your Data is not Deleted";
        header('Location: menu.php');
    }
}
