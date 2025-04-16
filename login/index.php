<?php
$page_Title="Home Page";
include('./inc/header.php');
include('./config/security.php');
include('./config/db.php');
$sql = "select * from user";
$result = $conn->query($sql); 

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

      <form action="/code/next.php" method="POST" class="card col-sm-6 mx-auto py-5 my-5 px-4" style="border: none;">
    <h1 class="text-center mt-4">Add A New Note:</h1>
  
    <div class="mb-3">
        <label for="tag" class="form-label">Tag</label>
        <select class="form-select" name="Tag" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Important</option>
  <option value="2">ImportantTwo</option>
  <option value="3">Personal</option>
</select>
    </div>
    <div class="mb-3">
        <label for="Title" class="form-label">Title</label>
        <input type="text" class="form-control" name="Title" placeholder="Enter Title">
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label">Description</label>
        <input type="text" class="form-control" name="Description"  placeholder="Enter Description">
   
    <div class="mb-3 text-center">
        <button name="" type="submit" style="width:100%;" class="btn btn-primary">Add Note</button>
    </div>
    <div class="mb-3 text-center">
        <a href="" class="text-end text-primary">View your notes</a>
    </div>
</form>

</div>











<?php
include('./inc/Footer.php');


?>
<a href="code/logout.php">Logout</a>