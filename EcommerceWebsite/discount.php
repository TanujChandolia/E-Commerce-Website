<?php
    require 'includes/common.php';
    $code = $_GET['code'];
    $CODE = "30OFF";
    
    if($code != $CODE){
        $m = false;
        header('location:cart.php?m1='.$m);
    }
    else{
        $m = true;
        header('location:cart.php?m1='.$m);
    }
?>
