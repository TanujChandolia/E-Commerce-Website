<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
       header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LifeStyle Store Home</title>
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
        <br><br>

        <div class = "banner_image">
            <div class = "container">
                <div class = "banner_content">
                    <h1> We sell lifestyle</h1>
                    <p>Flat 40% off on premium brands.</p><br>
                    <a href = "login.php" class ="btn btn-danger active btn-lg">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>


        <?php
           include 'includes/footer.php';
        ?>
    </body>
</html>
