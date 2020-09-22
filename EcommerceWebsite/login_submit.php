<?php
    require 'includes/common.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, ($_POST['password']));
    $password = md5($password);
    
    $select_query = "SELECT id,email FROM users WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total = mysqli_num_rows($res);
    $row;
    if($total == 0){
        $error = "<span style ='color:red'>Invalid Credentials</span>";
        header("location:login.php?m1=".$error);
    }
    else{
        $row = mysqli_fetch_array($res);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
    }
?>