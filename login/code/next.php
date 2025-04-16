<?php
session_start();
include('../config/db.php');

if(isset($_POST['Title'])){
    $Tag =mysqli_real_escape_string($conn, $_POST['Tag']);
    $Title =mysqli_real_escape_string($conn, $_POST['Title']);
    $Description =mysqli_real_escape_string($conn, $_POST['Description']);

     $sql ="insert into next(Tag,Title,Description) values('$Tag','$Title','$Description')";

     $result = mysqli_query($conn,$sql);
     if($result){
         $_SESSION['msg']="Add Todo Success"; 
         header('location: ../next.php');
     }else{
         $_SESSION['error']="Add Todo Failed";
         header('location: ../next.php');
     }

}


?>


