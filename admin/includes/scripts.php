<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>


<?php
$connection = new mysqli("localhost", "root", "", "cart");

if (isset($_POST['registerbtn'])) {
    $name = $_POST['name'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO registration (name, username, email, password) values ('$name','$username','$email','$password')";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        echo "done";
        $_SESSION['success'] = "User is Added Successfully";
        header('Location: register.php');
    } else {
        echo "not done";
        $_SESSION['status'] = "User is Not Added";
        header('Location: register.php');
    }
}
?>