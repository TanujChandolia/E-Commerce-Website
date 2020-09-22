<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up for LifeStyle</title>
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
                    <h2>SIGN UP</h2>
                    <form method = "POST" action="signup_script.php">
                        <div class = "form-group">
                            <input type = "text" name = "name" class ="form-control" placeholder ="Name" required pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class = "form-group">
                            <input type = "email" name = "email" class ="form-control" placeholder ="Email" required>
                            <?php
                                if(isset($_GET['m1'])){
                                    echo $_GET['m1'];
                                }
                            ?>
                        </div>
                        <div class = "form-group">
                            <input type = "password" name = "password" class ="form-control" placeholder ="Password" required  pattern=".{6,}">
                        </div>
                        <div class = "form-group">
                            <input type = "text" name = "contact" class ="form-control" placeholder ="Contact" required maxlength="10" size="10">
                            <?php
                                if(isset($_GET['m2'])){
                                    echo $_GET['m2'];
                                }
                            ?>
                        </div>
                        <div class = "form-group">
                            <input type = "text" name = "city" class ="form-control" placeholder ="City" required>
                        </div>
                        <div class = "form-group">
                            <input type = "text" name = "address" class ="form-control" placeholder ="Address" required>
                        </div>
                        
                        <button type = "submit" value = "submit" class = "btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                
        <?php
           include 'includes/footer.php';
        ?>
    </body>
</html>
