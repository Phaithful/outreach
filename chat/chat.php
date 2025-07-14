<?php session_start() ?>

<h1>WELCOME</h1> <?php echo $_SESSION["user_id"] ?>
<h2>and</h2> <?php echo $_SESSION["therapist_id"] ?>
<h3>YOU ARE IN</h3> <?php echo $_SESSION["chat_id"] ?>
<h4>YOU ARE USER</h4>
<?php echo $_SESSION["username"] ?>
<h4>YOU ARE THERAPIST</h4>
<?php echo $_SESSION["tuser_name"] ?>

<?php
if (!isset($_SESSION["user_id"])) {
    header("Location: ../plogin.php");
}

$chat_id = $_GET["chat_id"];

if ($_SESSION["role"] == 2) {
    // Therapist UI
    echo "<h1>Welcome Therapist " . $_SESSION["username"] . "</h1>";
} else if ($_SESSION["role"] == 3) {
    // Victim UI
    echo "<h1>Welcome Victim " . $_SESSION["username"] . "</h1>";
}
?>

<div class="chat-header">
    <h4>Chatting with: [username or name tag]</h4>
</div>

<!-- Chat Box -->
<div id="chat-box" style="height: 400px; overflow-y: scroll; background: #f9f9f9; border: 1px solid #ddd;">
    <!-- Messages will be appended here -->
</div>

<!-- Message Input Area -->
<form id="chat-form" method="POST" class="d-flex mt-3">
    <input type="text" name="message" id="message-input" class="form-control" placeholder="Type your message..." autocomplete="off">
    <button type="submit" class="btn btn-primary ms-2">Send</button>
</form>