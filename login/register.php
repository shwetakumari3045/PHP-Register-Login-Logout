<?php   
$page_title="Register Page";
    include('inc/header.php');
?>


<form action="code/register.php" method="POST" class="card col-sm-4 mx-auto py-5 my-5 rounded px-4">
  
<?php if(isset($_SESSION['error'])){
            ?>
            <div class="mb-3 alert alert-danger">
            <?=$_SESSION['error']?>
            </div>
            <?php
    unset($_SESSION['error']);
}
                        ?>
           
           



           <?php if(isset($_SESSION['msg'])){
            ?>
            <div class="mb-3 alert alert-success">
            <?=$_SESSION['msg']?>
            </div>
            <?php
    unset($_SESSION['msg']); 
}
    
                        ?>

    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="email" placeholder="Enter Email">
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>
    <div class="mb-3">
        <button name="registerBtn" type="submit" style="width:100%;" class="btn btn-primary">Submit</button>
    </div>
    <div class="mb-3">
        <a href="login.php" class="text-end text-primary">Login</a>
    </div>
</form>

<?php
if(isset($_POST['registerBtn'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    //  echo $name;
    //  echo $email;
    //  echo $password;
 
     $_SESSION['msg']="Submit Success";
}

?>


<?php
    include('inc/Footer.php');
?>

