<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Woo Hoo!!</title>
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
           $user_id = $_SESSION['user_id'];
           $update_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND status = 'Added to Cart'";
           $res = mysqli_query($con, $update_query) or die(mysqli_error($con));
        ?>
        
        <br><br><br><br>
        
        <div class = "container">
            <div class ="jumbotron text-center" style = "padding: 12.5% 0px">
                <h1>SUCCESS!</h1>
                <h3>Your Order is confirmed! Thank You for shopping with us.</h3>
                <p><a href = "products.php">Click Here</a> to purchase any other item. </p>
            </div>
        </div>
        <?php
           include 'includes/footer.php';
        ?>
    </body>
</html>
