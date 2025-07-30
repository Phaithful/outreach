<?php
session_start();
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>

    <!-- Document Links -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="chat.css">
    <link rel="icon" href="images/white_logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>

<body>


    <div class="container">



        <!----------------- Collapsable Side Bar ----------------------->
        <aside>

            <!-- Top section of the side bar [Logo & Company Name]-->
            <div class="top">
                <div class="logo">
                    <img src="../images/black_logo.png" alt="logo">
                    <h2>Outreach</h2>
                </div>

                <div class="close" id="closeBtn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <!-- Top section of the side bar ending -->


            <!-- Actual Side Bar Menu/Links -->
            <div class="sidebar">
                <?php if ($_SESSION["role"] == 2) { ?>
                    <a href="../home/therapist.php">
                        <span class="material-symbols-outlined">home_app_logo</span>
                        <h3>Home</h3>
                    </a>
                <?php } else {?>
                    <a href="../home/victim.php">
                        <span class="material-symbols-outlined">home_app_logo</span>
                        <h3>Home</h3>
                    </a>
                <?php } ?>
                
                <a href="" class="active">
                    <span class="material-symbols-outlined">chat</span>
                    <h3>Chat</h3>
                </a>

                <a href="../chat/th_notification.php" >
                    <span class="material-symbols-outlined">notifications_active</span>
                    <h3>Notifications</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>


                <a href="logout.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
                

            </div>
            <!------------------- Actual Side Bar Menu ending ------------------------->

        </aside>
        <!---------------------- Collapsable Side Bar Ending --------------------------->


        <!---------------- Main Section --------------------->
        <main>

            <div class="main_head">

                <h1 class="chat-intro">Chat Session<span>...</span></h1>

                <div class="menu" id="menuBtn">
                    <button>
                        <span class="material-symbols-outlined">segment</span>
                    </button>
                </div>


                <div class="profile_info">

                    <div class="profile-photo">
                        <img src="../chat/avatar.png" alt="" >
                    </div>

                    <div>
                        <p><?php echo $_SESSION["username"] ?></p>
                    </div>
                    <button>
                        <span class="material-symbols-outlined">stat_minus_1</span>
                    </button>
                    
                </div>
                

            </div>
        
                
            <div class="hero">

                <div class="title">

                    <div class="block1">
                        <div class="chat-profile">
                            <img src="../chat/avatar.png" alt="" class="profile-photo">
                            <h1>John Doe</h1>
                        </div>

                        <button class="end">
                            End Chat
                        </button>
                                
                        <div class="title-btn">
                            <button>
                                <span class="material-symbols-outlined">call</span>
                            </button>
                            <div></div>
                            <button>
                                <span class="material-symbols-outlined">videocam</span>
                            </button>
                        </div>
                    </div>

                    <div class="profile-hr"></div>
                    

                    <button class="end2">
                        End Chat
                    </button>
                    
                </div>

                

                <div class="content">
                    <div class="container">

                        <div class="chat">
                            <div id="chat-box" class="chat-box d-flex flex-column mb-3"></div>
                            <form id="chat-form" class="d-flex"  onsubmit="return false;">

                                <button id="emoji-button"><span class="material-symbols-outlined" style="display: flex; align-items: center; justify-content: center">
                                    sentiment_satisfied</span>
                                </button>

                                <input type="text" id="message-input" class="form-control" placeholder="Type a message..." autocomplete="off">

                                <button type="submit" class="btn btn-success ms-2">
                                    <span class="material-symbols-outlined">send</span>
                                </button>

                            </form>
                        </div>
                        
                    </div>
                </div>

            </div>




            
        </main>
        <!---------- Main Section Ending --------------------->


    </div>





    
    <script>
    const user_id = <?= $_SESSION["user_id"] ?>;
    const chat_id = "<?= $chat_id ?>";

    const chatBox = document.getElementById("chat-box");
    const form = document.getElementById("chat-form");
    const input = document.getElementById("message-input");

    const socket = new WebSocket("ws://172.20.10.2:8000/chat");


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


    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@latest/dist/index.min.js"></script>
    <script src="chat.js"></script>

    
</body>
</html>




