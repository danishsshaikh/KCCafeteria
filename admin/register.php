<?php
include('includes/header.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="connect1.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="register.php">
                <h6 class="m-0 font-weight-bold text-primary">Admin Profile </h6>
            </a>
            <a href="menu.php">
                <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
            </a>

            <a href="./../index.php" class="">
                <h6 class="m-0 font-weight-bold text-primary">
                    KC Cafeteria</h6>
            </a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Add User
            </button>
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <?php
                $connection = mysqli_connect("localhost", "root", "", "cart");
                $query = "SELECT * FROM registration";
                $query_run = mysqli_query($connection, $query);

                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name </th>
                            <th>Username </th>
                            <th>Email </th>
                            <th>Password</th>
                            <th>EDIT </th>
                            <th>DELETE </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                <tr>
                                    <td> <?php echo $row['name']; ?></td>
                                    <td> <?php echo $row['username']; ?></td>
                                    <td> <?php echo $row['email']; ?></td>
                                    <td> <?php echo $row['password']; ?> </td>
                                    <td>
                                        <form action="edit.php" method="post">
                                            <input type="hidden" name="edit_name" value="<?php echo $row['name']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="delete.php" method="post">
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