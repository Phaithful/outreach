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
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
            <!-- Top section of the side bar ending -->


            <!-- Actual Side Bar Menu/Links -->
            <div class="sidebar">
                
                <a href="../home/therapist.php">
                    <span class="material-symbols-outlined">home_app_logo</span>
                    <h3>Home</h3>
                </a>

                <a href="" >
                    <span class="material-symbols-outlined active">chat</span>
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


                <a href="">
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

                <div class="cta_button">
                    <!-- <a href="../questionnaire/help.php">
                        <span class="material-symbols-outlined">psychiatry</span>
                        <p>Talk to Therapist </p>
                    </a> -->
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
                
                <div class="hero_cont">

                    <div class="title">
                        <h1>Chat<span>.</span></h1>
                    </div>

                    <div class="content">
                        <div class="container">
                            <h4>Live Chat - Chat ID: <?= htmlspecialchars($chat_id) ?></h4>
                            <div class="chat">
                                <div id="chat-box" class="chat-box d-flex flex-column mb-3"></div>
                                <form id="chat-form" class="d-flex"  onsubmit="return false;">
                                    <div class="send-div">
                                        <input type="text" id="message-input" class="form-control" placeholder="Type a message..." autocomplete="off">
                                        <button type="submit" class="btn btn-success ms-2">
                                            <span class="material-symbols-outlined">send</span>
                                        </button>
                                    </div>     
                                </form>
                            </div>
                            
                        </div>
                    </div>

                </div>

            </div>



            
        </main>
        <!---------- Main Section Ending --------------------->


    </div>


    
</body>
</html>




