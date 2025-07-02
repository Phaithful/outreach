<?php
session_start();
?>

<?php if ( $_SESSION["role"] == 2 ) {?>
    <h1>THERAPIST COME HERE</h1>
<?php } ?>