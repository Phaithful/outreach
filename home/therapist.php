<?php
session_start();
?>

<?php if ( $_SESSION["role"] == 2 ) {?>
    <h1>WELCOME THErapist <?php echo $_SESSION["username"] ?> </h1>

    <h1 style="margin-top: 30px;">Check notifications</h1>
    <a href="../chat/th_notification.php"><button>Notifications</button></a>
    <!-- //dont leave this bracket -->
<?php } ?>
<!-- dont reach here -->