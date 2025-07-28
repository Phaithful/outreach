<?php
session_start();
include "../../config/db.php";
header('Content-Type: application/json');

// ✅ Step 1: Check login
if (!isset($_SESSION["user_id"])) {
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

$user_id = $_SESSION["user_id"];

// ✅ Step 2: Handle saving message to DB
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    if (!$data) {
        echo json_encode(["error" => "Invalid or empty JSON"]);
        exit;
    }

    if (isset($data["message"], $data["chat_id"])) {
        $message = trim($data["message"]);
        $chat_id = $data["chat_id"];

        // ✅ Validate message
        if ($message === "") {
            echo json_encode(["error" => "Empty message"]);
            exit;
        }

        // ✅ Confirm chat session exists & get participants
        $stmt = $conn->prepare("SELECT user_id, therapist_id FROM chat_sessions WHERE chat_room_id = ?");
        $stmt->bind_param("s", $chat_id);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows === 0) {
            echo json_encode(["error" => "Chat session not found"]);
            exit;
        }
        
        $stmt->bind_result($p1, $p2);
        $stmt->fetch();
        $stmt->close();

        file_put_contents("debug.txt", "SESSION user_id = $user_id | p1 = $p1 | p2 = $p2\n", FILE_APPEND);
        
        // ✅ Determine receiver
        if ($user_id == $p1) {
            $receiver_id = $p2;
        } elseif ($user_id == $p2) {
            $receiver_id = $p1;
        } else {
            echo json_encode(["error" => "User not part of this chat"]);
            exit;
        }

        // ✅ Save message
        $insert = $conn->prepare("INSERT INTO chat_messages (session_id, sender_id, receiver_id, message) VALUES (?, ?, ?, ?)");
        $insert->bind_param("siis", $chat_id, $user_id, $receiver_id, $message);

        if ($insert->execute()) {
            echo json_encode(["status" => "Message saved"]);
        } else {
            echo json_encode(["error" => "Database error"]);
        }
        exit;
    } else {
        echo json_encode(["error" => "Invalid input"]);
        exit;
    }
}

// ✅ Step 3: Handle retrieving messages
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["chat_id"])) {
    $chat_id = $_GET["chat_id"];

    // ✅ Check if chat session exists
    $check = $conn->prepare("SELECT id FROM chat_sessions WHERE chat_room_id = ?");
    $check->bind_param("s", $chat_id);
    $check->execute();
    $check->store_result();

    if ($check->num_rows === 0) {
        echo json_encode(["error" => "Invalid chat session"]);
        exit;
    }

    // ✅ Load messages
    $stmt = $conn->prepare("SELECT sender_id, message, created_at FROM chat_messages WHERE session_id = ? ORDER BY created_at ASC");
    $stmt->bind_param("s", $chat_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $messages = [];
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    echo json_encode($messages);
    exit;
}

echo json_encode(["error" => "Invalid request"]);
exit;
