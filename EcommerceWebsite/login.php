<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In to your Account</title>
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
        <link rel ="stylesheet" type="text/css" href ="style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
           include 'includes/header.php';
        ?>
        
        <br><br><br><br>
        
        <div class = "container">
            <div class = "row">
                <div class = "col-xs-4 col-xs-offset-4">
                    
                    <div class = "panel panel-primary">
                        <div class = "panel-heading">
                            <h3>LOGIN</h3>
                        </div>
                        <div class = "panel-body">
                            <p class = "text-warning"> Login to make a purchase </p>
                            <form method = "POST" action="login_submit.php">
                                <div class = "form-group">
                                    <input type ="email" class ="form-control" placeholder="Email" name = "email" required="true">
                                </div>
                                <div class = "form-group">
                                    <input type ="password" class ="form-control" name="password" placeholder = "Password" required="true" pattern=".{6,}"> 
                                    <?php
                                        if(isset($_GET['m1'])){
                                            echo $_GET['m1'];
                                        }
                                    ?>
                                </div>
                                <button type = "submit" value = "submit" class = "btn btn-primary">Login</button>
                            </form>
                        </div>
                        <br><br><br>
                        <div class = "panel-footer">
                            <p>Don't have an account? <a href = "signup.php">Register</a></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <?php
           include 'includes/footer.php';
        ?>
        
    </body>
</html>
