<?php
session_start();
include "../config/db.php";
$therapists = [];

if (isset($_SESSION["problems"])) {
    $problem =  (int)$_SESSION["problems"];

    $query = "
    SELECT t.full_name, t.country, t.user_id, u.name_tag
    FROM therapist_solution ts
    JOIN therapist t ON therapist_id = t.id
    JOIN users u ON user_id = u.id
    WHERE ts.problem_id = ?
    ";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $problem);
    $stmt->execute();
    $result =  $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $therapists[] = $row;
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST"  &&  isset($_POST["tuser_id"])) {
    $tuid = $_POST["tuser_id"];
    $tname = $_POST["tuser_name"];
    $uid = $_SESSION["user_id"];

    $look = $conn->prepare("SELECT id FROM therapist WHERE user_id = ?");
    $look->bind_param("i", $tuid);
    $look->execute();
    $look->bind_result($tid);
    $look->fetch();
    $look->close();

    $select = $conn->prepare("SELECT chat_room_id FROM chat_sessions WHERE user_id = ? AND therapist_id = ?");
    $select->bind_param("ii", $uid, $tid);
    $select->execute();
    $select->store_result();

    if ($select->num_rows > 0) {
        $select->bind_result($chat_id);
        $select->fetch();
    } else {
        $chat_id = uniqid("chat_");
        $insert = $conn->prepare("INSERT INTO chat_sessions (user_id, therapist_id, chat_room_id) VALUES (?,?,?) ");
        $insert->bind_param("iis", $uid, $tid, $chat_id);
        $insert->execute();
        $insert->close();
    }
    $select->close();
    $conn->close();

    $_SESSION["therapist_id"] = $tid;
    $_SESSION["tuser_name"] = $tname;
    $_SESSION["chat_id"] = $chat_id;

    header("Location: ./chat.php");
}
