<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
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
                    <form action="settings_script.php" method="POST">
                        <h3>Change Password</h3>
                        <br>
                        <div class = "form-group">
                            <input type = "password" name="oldpassword" placeholder="Old Password" class = "form-control" required="true">
                        </div>
                        <div class = "form-group">
                            <input type = "password" placeholder="New Password" name="newpassword" pattern=".{6,}" class = "form-control" required="true">
                        </div>
                        <div class = "form-group">
                            <input type = "password" placeholder="Re-enter New Password" name="renewpassword" pattern=".{6,}" class = "form-control" required="true">
                        </div>
                        <div>
                            <?php
                                if(isset($_GET['m1'])){
                                    echo $_GET['m1'];   
                                }
                            ?>
                        </div>
                        <button type="submit" class = "btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php
           include 'includes/footer.php';
        ?>
    </body>
</html>
