<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
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
        ?>
        
        <br><br><br><br>
        
        
        <div class = "container">
            <div class = "row">
                <div class = "col-xs-6 col-xs-offset-3">
                    <form action="discount.php" method="POST" class ="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" name="code" placeholder="Enter discount code">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                        $select_query = "SELECT * FROM users_items u INNER JOIN items i ON u.item_id = i.id WHERE user_id = '$user_id' AND status = 'Added to Cart'";
                        $disc;
                        if(isset($_GET['m1'])){
                            $disc = $_GET['m1'];
                        }
                        $sum = 0;
                        $res = mysqli_query($con, $select_query) or die(mysqli_error($con));
                        $total = mysqli_num_rows($res);
                        
                        if($total >= 1){
                    ?>
                            <table class = "table table-striped table-responsive">
                                <thead>
                                        <tr>
                                            <th>Item Number</th>
                                            <th>Item Name</th>
                                            <th>Item Price</th>
                                            <th></th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_array($res)){
                                            $sum += $row['price'];
                                            
                                            echo "<tr><td>"."# ".$row['id']."</td><td>".$row['name']."</td><td>Rs ".$row['price']."</td><td><a href = 'cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'>Remove</a></td></tr>" ;
                                        }
                                        if(isset($disc)){
                                            $sum = $sum - (0.3)*$sum;
                                        }
                                        echo"<tr><td></td><td>Total</td><td>Rs ".$sum."</td><td><a href = 'success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                                    ?>
                                </tbody>
                            </table>
                    <?php
                    }
                    else{
                        echo "Add items to the cart first!";
                    }   
                    ?>
                </div>
            </div>
        </div>
        
        <?php
           include 'includes/footer.php';
        ?>
    </body>
</html>
