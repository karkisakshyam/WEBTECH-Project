<?php
include 'header.php';
?>
<div class="container">
    <?php
    $user = $_SESSION['user'];
    echo "Welcome" . $user;?>

</div>
<?php include 'footer.php'; ?>