<?php
$connection = mysqli_connect("localhost", "root", "", "cart");

if (isset($_POST['updatemenubutton'])) {
    $menuid = $_POST['edit_name'];
    $menuimage = $_POST['editmenu_image'];
    $menuname = $_POST['editmenu_name'];
    $menuprice = $_POST['editmenu_price'];

    $query = "UPDATE tbl_product SET id='$menuid', name = '$menuname', price ='$menuprice' WHERE id = '$menuid'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: menu.php');
    } else {
        $_SESSION['status'] = "Your Data is not Updated";
        header('Location: menu.php');
        echo $menuid;
        echo $menuimage;
        echo $menuname;
        echo $menuprice;
    }
}
