<?php
$page_title = "Next Page";
include('index.php');

$sql = "SELECT * FROM next";
$result = $conn->query($sql);

if (isset($_SESSION['msg'])) {
    ?>
    <div class="mb-3 alert alert-success">
        <?= $_SESSION['msg'] ?>
    </div>
    <?php
    unset($_SESSION['msg']);
}
?>


<div class="container mt-4">
<?php

if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        ?>
    <div class="col-sm-4">
        <div class="border p-5">


       
        <p><?= ($row->Tag) ?></p>
        <p><?= ($row->Title) ?></p>
        <p><?= ($row->Description) ?></p>
        
        
        </div>
    </div>
    <?php
    }
} else {
    echo "<p>No records found.</p>";
}
?>

</div>

<?php
include('./inc/footer.php');
?>
