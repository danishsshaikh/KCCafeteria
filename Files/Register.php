<?php
include('login.php');  
//if(isset($_SESSION['login_user'])){
//header("location: index.php");  
//}
?>

<html>
<head>
    <title>Registration / Login Page</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="himanshu.css">
    <link rel="stylesheet"  type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset= md-1">
                <div class="row">
                    <div class="col-md-3 register-left">
                        
                        <!–– Some CSS BOX Effect for Canteen Pictures -->
                                                <!–– Some CSS BOX Effect for Canteen Pictures -->

<!--                        <h3>KC Cafeteria</h3>-->
                        </br>
                       <img src="logo.png" width="75%" height="220">
                        
                        <p>Hungry? Order Right away at your classroom.</p>
                        
                        <button type="button" class="btn btn-primary" onclick="location.href = 'https://kccemsr.edu.in/'">Our Website</button>
                        
                    </div>
                    <div class="col-md-5 register-right">
                        <h2>Register Here</h2>
                <form action="connect.php" method="post">
                        <div class="register-form">
                            
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="nname">
                            </div>
                            
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="uname">
                            </div>
                            
                            <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="ename">
                            </div>
                            
                            <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="pname">
                            </div>
                            
                            <input type="Submit" value="Submit" class="btn btn-primary">
                            
                        </div>
                        </form>
                    </div>
                    
                    
                    
                    <div class="col-md-4 register-right offset = md-3" >
                        <h2>Login Here</h2>
                <form action="login.php" method="post">
                        <div class="register-form">
                            
<!--
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="nname">
                            </div>
-->
                            
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="uuname">
                            </div>
                            
<!--
                            <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="ename">
                            </div>
                            
-->
                            <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="ppname">
                            </div>
                            
                            <input type="submit" value="Login" class="btn btn-primary" name="submit">
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
