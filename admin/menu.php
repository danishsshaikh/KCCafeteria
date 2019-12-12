<?php
include('includes/header.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="register.php">
                <h6 class="m-0 font-weight-bold text-primary">Admin Profile </h6>
            </a>
            <a href="menu.php">
                <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
            </a>
            <a href="./../index.php">
                <h6 class="m-0 font-weight-bold text-primary">KC Cafeteria</h6>
            </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $connection = mysqli_connect("localhost", "root", "", "cart");
                $query = "SELECT * FROM tbl_product";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                <tr>
                                    <td> <?php echo $row['id']; ?></td>
                                    <td> <?php echo $row['name']; ?></td>
                                    <td> <?php echo '<img src = "upload/' . $row['image'] . '" width = "100px;" height="100px"; alt="' . $row['image'] . '>' ?></td>
                                    <td> <?php echo $row['price']; ?> </td>
                                    <td>
                                        <form action="editmenu.php" method="post">
                                            <input type="hidden" name="edit_name" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="deletemenu.php" method="post">
                                            <input type="hidden" name="delete_name" value="<?php echo $row['name']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/scripts.php');
?>