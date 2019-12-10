<?php
$i_name = ('item_name');
$i_quantity = ('item_quantity');
$i_price = ('item_price');
$i_id = ('item_id');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cart";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
} else {
    $sql = "INSERT INTO tbl_order (itemname, itemquantity, itemprice, itemid) values ('$i_name','$i_quantity','$i_price','$i_id')";
    if ($conn->query($sql)) {
        header("location: lastpageFINAL.php");
    } else {
        echo "Error: " . $sql . "" . $conn->error;
    }
    $conn->close();
}
