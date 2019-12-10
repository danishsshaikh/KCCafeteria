<html lang="en">

<head>
    <link rel="icon" href="assets/imgs/logo.png" />

    <link rel="stylesheet" type="text/css" href="lastpage.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Admin Login</title>
    <style>
        .btn-submit {
            position: relative;
            outline: none;
            text-decoration: none;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            text-transform: uppercase;
            height: 60px;
            width: 210px;
            opacity: 1;
            background-color: #ffffff;
            border: 1px solid rgba(22, 76, 167, 0.6);
        }

        .bg-body {
            background-image: linear-gradient(to left, #B3FFAB, #12FFF7);
        }
    </style>

</head>

<body class="bg-body">
    <div class="container">
        <form class="well form-horizontal" action="admincheck.php" method="post" id="contact_form">
            <fieldset>
                </br>
                </br>
                </br>
                </br>
                </br>
                <h2>Admin Login</h2>
                </br>
                <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="adminU" placeholder="Username" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                </br>
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="adminP" placeholder="Password" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                </br>
                </b>
                <input class="btn-submit" type="submit" value="Submit">
            </fieldset>
        </form>

    </div>

</body>

</html>