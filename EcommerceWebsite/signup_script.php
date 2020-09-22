<?php
    require 'includes/common.php';
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con, $name);
    
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con, $email);
    
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con, $password);
    $password = md5($password);

    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con , $contact);

    $city = $_POST['city'];
    $city = mysqli_real_escape_string($con , $city);

    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con , $address);
    

    $select_query = "SELECT email FROM users WHERE email = '$email'";
    $res = mysqli_query($con, $select_query);
    $total = mysqli_num_rows($res);
    if($total > 0){
        $error = "<span style = 'color:red'>Email Already exists</span>";
        header('location:signup.php?m1='.$error);
    }else if(strlen($contact) != 10){
        $error = "<span style = 'color:red'>Incorrect Contact Number</span>";
        header('location:signup.php?m2='.$error);
    }
    else{
        $insert_query = "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
        $res = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location:products.php');
    }            
    
?>