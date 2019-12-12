<?php
session_start();
include('includes/header.php');
?>
<div class="container-fluid">
    <div class="card shawdow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Item Data</h6>
            </br>
            <a href="menu.php">
                <h6 class="m-0 font-weight-bold text-primary">Back to Menu</h6>
            </a>
        </div>
        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "cart");
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_name'];
                $query = "SELECT * FROM tbl_product WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) {
                    ?>
                    <form action="updatemenu.php" method="post">
                        <div class="form-group">
                            <label>ID of the Item</label>
                            <input type="text" name="edit_name" value="<?php echo $row['id'] ?>" class="form-control" placeholder="Enter ID">
                        </div>
                        <div class="form-group">
                            <label>Image of the Item</label>
                            <input type="text" name="editmenu_image" value="" class="form-control" placeholder="Name the Image File">
                        </div>
                        <div class="form-group">
                            <label>Name of the Item</label>
                            <input type="text" name="editmenu_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Price of the Item</label>
                            <input type="text" name="editmenu_price" value="<?php echo $row['price'] ?>" class="form-control" placeholder="Enter Price">
                        </div>
                        <a href="menu.php" class="btn btn-danger"> Cancel </a>
                        <button class="btn btn-primary" type="submit" name="updatemenubutton">Update</button>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include('includes/scripts.php');

?>