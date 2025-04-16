<?php
session_start();
include('../config/db.php');

if(isset($_POST['loginBtn'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $email = strtolower($email);
    $sql = "select * from user where email='$email'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        if($user){
            $user_pass = $user['password'];
            $verify_pass = password_verify($password, $user_pass);

            if($verify_pass){
                $_SESSION['user']=$user['id'];
                    $_SESSION['msg']="login Success";
                    header('location:../index.php');
            }else{
                $_SESSION['error']="Incorrect Password";
                header('location:../login.php');
            }


        }else{
            $_SESSION['error']="Incorrect Password";
            header('location:../login.php');
        }
    } else{
        $_SESSION['error']="No User Found ";
        header('location:../login.php');
    }

    


}
