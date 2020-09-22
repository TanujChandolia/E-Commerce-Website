<?php
    require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LifeStyle Products</title>
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
           include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br>
        
        <div class = "container">
            <div class = "jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best watches,cameras and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
      
        
            <div class = "row text-center">
                <div class = "col-md-3 col-sm-6 ">
                    
                    <div class ="thumbnail lightup"> 
                        <img src = "images/5.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Canon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(1)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ 
                                    ?>
                                    <a href = "cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">
                    <div class ="thumbnail lightup"> 
                        <img src = "images/2.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 40000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(2)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ 
                                    ?>
                                    <a href = "cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php                              
                                    }
                                }
                              ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">
                    <div class ="thumbnail lightup"> 
                        <img src = "images/3.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(3)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                                    }
                                }
                              ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">    
                    <div class ="thumbnail lightup"> 
                        <img src = "images/4.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 80000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(4)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                    
                </div>
            </div>
            
        
            <div class = "row text-center">
                <div class = "col-md-3 col-sm-6 ">

                    <div class ="thumbnail lightup"> 
                        <img src = "images/9.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 13000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(5)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">
                    <div class ="thumbnail lightup"> 
                        <img src = "images/10.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(6)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">
                    <div class ="thumbnail lightup"> 
                        <img src = "images/11.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(7)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">    
                    <div class ="thumbnail lightup"> 
                        <img src = "images/12.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Faber Luba #11</h3>
                            <p>Price: Rs. 18000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(8)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>

                </div>
            </div>
           
            
            <div class = "row text-center">
                <div class = "col-md-3 col-sm-6 ">
                    <div class ="thumbnail lightup"> 
                        <img src = "https://previews.123rf.com/images/vichie81/vichie811107/vichie81110700141/10037732-close-up-view-of-a-generic-blue-business-shirt-with-a-line-pattern.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>H&W</h3>
                            <p>Price: Rs. 800.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(9)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">
                    <div class ="thumbnail lightup"> 
                        <img src = "images/6.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Luis Phil   </h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(10)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">
                    <div class ="thumbnail lightup"> 
                        <img src = "images/13.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(11)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>
                </div>
                <div class = "col-md-3 col-sm-6 ">    
                    <div class ="thumbnail lightup"> 
                        <img src = "images/14.jpg" alt ="Camera" class ="img-responsive" >
                        <div class = "caption">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs. 1300.00</p>
                            <?php
                                if(!isset($_SESSION['email'])){ ?>
                                    <p><a href = "login.php" class="btn btn-primary btn-block">Add to Cart</a></p>
                                <?php
                                
                                }
                                else{
                                    if(check_if_added_to_cart(12)){
                                       echo'<a href = "#" class = "btn btn-success btn-block" disabled>Added to Cart</a>';
                                    }
                                    else{ ?>
                                    <a href = "cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a> 
                                    
                              <?php
                              
                                    }
                                }
                            ?>
                        </div>   
                    </div>

                </div>
            </div>
             
        </div>
        
        
        <br><br><br>
        <?php
           include 'includes/footer.php';
        ?>
    </body>
</html>
