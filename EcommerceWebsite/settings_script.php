<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    $email = $_SESSION['email'];
    
    $oldpass = $_POST['oldpassword'];
    $oldpass = mysqli_real_escape_string($con, $oldpass);
    
    $newpass = $_POST['newpassword'];
    $newpass = mysqli_real_escape_string($con, $newpass);  
    
    $renewpass = $_POST['renewpassword'];
    $renewpass = mysqli_real_escape_string($con, $renewpass);
    
    $select_query = "SELECT * FROM users WHERE email = '$email' AND password = md5('$oldpass')";
    $res = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total = mysqli_num_rows($res);
    
    if(($total != 0) && ($newpass === $renewpass)){
       $newpass = md5($newpass);        
       $success = "<span style = 'color:green'>Password Changed</span>";
       $update_query = "UPDATE users SET password = '$newpass' WHERE email = '$email'";
       $updateres = mysqli_query($con,$update_query) or die(mysqli_error($con));
       header('location:settings.php?m1='.$success);
    }
    else if($newpass != $renewpass){
        $error = "<span style = 'color:red'>Re-entered new password is not the same.</span>";
        header('location:settings.php?m1='.$error);
    }else if($total === 0){
        $error = "<span style = 'color:red'>Old Password is not correct</span>";
        header('location:settings.php?m1='.$error);
    }
    
?>