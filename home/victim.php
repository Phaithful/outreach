<?php
session_start();
?>

<?php if ($_SESSION["role"] == 3) { ?>
    <!-- // start writing font end code from here -->
    <h1>WELCOME Victim <?php echo $_SESSION["username"] ?> </h1>

    <h1 style="margin-top: 50px;">Select your problem</h1>
    <a href="../questionnaire/help.php"><button>Get Help</button></a>
    <!-- // dont go outside bracket ohhh
    // you no dey hear word -->
<?php } ?>