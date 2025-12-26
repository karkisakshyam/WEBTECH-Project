<?php

include 'header.php';
?>
<div class="content">
   <?php
   $user = $_SESSION['users'];
   echo "welcome $user";
?>
</div>

<?php include 'footer.php'; ?> // adds footer at the page