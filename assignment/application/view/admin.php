<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="application/css/bootstrap.min.css" crossorigin="anonymous">

        <link rel="stylesheet" href="application/css/custom.css" crossorigin="anonymous" type="text/css"/>
        <style> <?php include "application/css/bootstrap.min.css" ?> </style>
        <style> <?php include "application/css/custom.css" ?> </style>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    
        <title>Coca-Cola Admin Page</title>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-sm-11 admin">
                  <div class="card modelCard">
                      <div class="card-body">
                        <form method="post" action="" id="login_form">
                            <div class="card-title drinksText"><h2>Input admin password to manage website data</h2></div>
                            <div class="card-text">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pass" placeholder="*******">
                                </div> 
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit_pass" value="Enter Password">
                                    <p>"Password : password"</p>
                                </div>
                            </div>   
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
        <script src="application/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="application/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="application/js/fontawesome-all.min.js"></script>
    </body>
</html>