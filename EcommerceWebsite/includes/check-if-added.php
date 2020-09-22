<?php
    
    function check_if_added_to_cart($item_id){
        $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
        $user_id = $_SESSION['user_id'];
        $select_query = "SELECT * FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id' AND status = 'Added to Cart'";
        $res = mysqli_query($con,$select_query);
        $total = mysqli_num_rows($res);
        if($total >= 1){ return 1;}
        else{ return 0;}
    }
?>