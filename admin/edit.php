<?php
session_start();
include('includes/header.php');
?>
<div class="container-fluid">
    <div class="card shawdow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User Data</h6>
            </br>
            <a href="register.php">
                <h6 class="m-0 font-weight-bold text-primary">Back to Admin Panel</h6>
            </a>
        </div>
        <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "cart");
            if (isset($_POST['edit_btn'])) {
                $name = $_POST['edit_name'];
                $query = "SELECT * FROM registration WHERE name='$name'";
                $query_run = mysqli_query($connection, $query);                
                foreach ($query_run as $row) {
                    ?>
                    <form action="updateuser.php" method="post">
                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="edit_uname" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
                        </div>
                        <a href="register.php" class="btn btn-danger"> Cancel </a>
                        <button class="btn btn-primary" type="submit" name="updatebtn">Update</button>
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