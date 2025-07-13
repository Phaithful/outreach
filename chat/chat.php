<?php session_start()?>

<h1>WELCOME</h1> <?php echo $_SESSION["user_id"]?>
<h2>and</h2> <?php echo $_SESSION["therapist_id"] ?>
<h3>YOU ARE IN</h3> <?php echo $_SESSION["chat_id"] ?>
<h4>YOU ARE USER</h4>
<?php echo $_SESSION["username"] ?>
<h4>YOU ARE THERAPIST</h4>
<?php echo $_SESSION["tuser_name"]?>