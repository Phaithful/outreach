<?php
session_start();
?>

<?php if ( $_SESSION["role"] == 2 ) {?>
    <h1>WELCOME  <?php echo $_SESSION["username"] ?> </h1>
    <!-- //dont leave this bracket -->
<?php } ?>
<!-- dont reach here -->