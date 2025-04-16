<?php
session_start();
include('../config/db.php');
if(isset($_POST['registerBtn'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    //  echo $name;
    //  echo $email;
    //  echo $password;
  

     $email = strtolower($email);
     $sql ="select * from user where email='$email'";
     $result = mysqli_query($conn,$sql);

     if($result){
        // $data= mysqli_fetch_array($result);       
        // print_r($data);
                 $data= mysqli_num_rows ($result);
                 print_r($data);
                 if($data>=1){
                     $_SESSION['error']="Email already exist";
                     header('location:../register.php');
                     die();
                 }
              
       

         
     }else{
         $_SESSION['error']="Something went wrong...";
         header('location:../register.php');
     }



     $hash_password = password_hash($password,PASSWORD_BCRYPT);


     $sql ="insert into user(name,email,password) values('$name','$email','$hash_password')";

     $result = mysqli_query($conn,$sql);
     if($result){
         $_SESSION['msg']="Register Success"; 
         header('location: ../register.php');
     }else{
         $_SESSION['error']="Register Failed";
         header('location: ../register.php');
     }
    //  $_SESSION['msg']='Submit Success';
    //  header('location: ../register.php');

}

?>