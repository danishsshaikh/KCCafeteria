<DOCTYPE html>
    <html>

    <head>
        <link rel="icon" href="assets/imgs/logo.png" />

        <link rel="stylesheet" type="text/css" href="lastpage.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Last Page</title>
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
                background-image: linear-gradient(to right, #fceabb, #f8b500);
            }
        </style>

    </head>

    <body class="bg-body">
        <div class="container">

            <form class="well form-horizontal" action="lastpageecho.php " method="post" id="contact_form">
                <fieldset>
                    <img src="page1.png" width="500" height="650" align="right">
                  
                    <h2>Enter Your Delivery Address</h2>

                    </br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" class="">Class No</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="class_no" placeholder="Class No or Lab No" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Mobile Number</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="mobilenumber" placeholder="Mobile Number" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    </br>
                    <input type="submit" value="Submit" class="btn-submit">

                </fieldset>
            </form>

        </div>

    </body>

    </html>