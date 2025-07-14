<?php
session_start();
include "../config/db.php";
if ($_SESSION["role"] == 2) {

    $user_id = $_SESSION["user_id"];

    $query = "SELECT id, title, message, link, created_at FROM notifications WHERE user_id = ? AND seen = 0 ORDER BY created_at DESC";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>My Notifications</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">
        <div class="container mt-5">
            <h3>🔔 New Notifications</h3>
            <ul class="list-group">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li class="list-group-item">
                        <strong><?php echo htmlspecialchars($row['title']); ?></strong><br>
                        <?php echo htmlspecialchars($row['message']); ?><br>
                        <small><?php echo $row['created_at']; ?></small><br>
                        <a class="btn btn-sm btn-primary mt-2"
                            href="chat-flow/mark_notif.php?id=<?php echo $row['id']; ?>&link=<?php echo urlencode($row['link']); ?>">
                            View Chat
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </body>

    </html>



<?php } else {
    header("location: ../plogin.php");
}
?>