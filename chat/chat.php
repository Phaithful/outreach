<?php
session_start();
echo "// Debug: Logged in as user_id = " . ($_SESSION["user_id"] ?? 'not set');
if (!isset($_SESSION["user_id"])) {
    header("Location: ../plogin.php");
    exit();
}
$chat_id = isset($_GET["chat_id"]) ? $_GET["chat_id"] : (isset($_SESSION["chat_id"]) ? $_SESSION["chat_id"] : null);
if (!$chat_id) {
    echo "❌ Chat ID not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chat-box {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
            background: #f8f9fa;
            border: 1px solid #ccc;
        }
        .chat-bubble {
            max-width: 70%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 12px;
            word-wrap: break-word;
        }
        .you {
            background-color: #d4edda;
            color: #155724;
            align-self: flex-end;
            margin-left: auto;
        }
        .other {
            background-color: #cce5ff;
            color: #004085;
            align-self: flex-start;
            margin-right: auto;
        }
    </style>
</head>
<body class="p-3">
<div class="container">
    <h4>Live Chat - Chat ID: <?= htmlspecialchars($chat_id) ?></h4>
    <div id="chat-box" class="chat-box d-flex flex-column mb-3"></div>
    <form id="chat-form" class="d-flex"  onsubmit="return false;">
        <input type="text" id="message-input" class="form-control" placeholder="Type a message..." autocomplete="off">
        <button type="submit" class="btn btn-success ms-2">Send</button>
    </form>
</div>

<script>
const user_id = <?= $_SESSION["user_id"] ?>;
const chat_id = "<?= $chat_id ?>";

const chatBox = document.getElementById("chat-box");
const form = document.getElementById("chat-form");
const input = document.getElementById("message-input");

const socket = new WebSocket("ws://localhost:8000/chat");


// 🧠 Append message to UI
function appendMessage(message, senderId) {
    const div = document.createElement("div");
    div.classList.add("chat-bubble");
    div.classList.add(senderId == user_id ? "you" : "other");
    div.textContent = message;
    chatBox.appendChild(div);
    chatBox.scrollTop = chatBox.scrollHeight;
}

// 🧠 Handle incoming WebSocket message
socket.onmessage = event => {
    try {
        const { message, sender_id } = JSON.parse(event.data);
        appendMessage(message, sender_id); // show to both sender and receiver
    } catch (err) {
        console.warn("Invalid WebSocket data received:", event.data);
    }
};

// 🧠 Send message on form submit
form.addEventListener("submit", function (e) {
    e.preventDefault();

    const message = input.value.trim();
    if (message === "") return;

    const payload = {
        sender_id: user_id,
        message: message
    };

    // ✅ Send via WebSocket
    socket.send(JSON.stringify(payload));

    // ✅ Save to DB
    console.log("Sending message to backend...", { message, chat_id });
    fetch("chat-flow/chat_view.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ message: message, chat_id: chat_id }) // ✅ Only send message & chat_id
    })
    .then(response => response.json())
    .then(data => {
        console.log("RESPONSE:", data);
        if (data.status !== "Message saved") {
            console.error("❌ DB Error Response:", data);
            alert("⚠️ Could not save message to database.");
        }
    })
    .catch(error => {
        console.error("❌ Fetch/Network Error:", error);
        alert("❌ Could not reach server to save message.");
    });

    input.value = "";
});

// 🧠 Load existing messages on page load
function loadMessages() {
    fetch(`chat-flow/chat_view.php?chat_id=${chat_id}`)
        .then(response => response.json())
        .then(data => {
            data.forEach(msg => appendMessage(msg.message, msg.sender_id));
        })
        .catch(error => {
            console.error("❌ Error loading messages:", error);
        });
}
loadMessages();
</script>
</body>
</html>
