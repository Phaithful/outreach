<?php
include "qauth/resolve.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>

    <!-- Document Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="area.css">
    <link rel="icon" href="../images/white_logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>

<body>



    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">


            <a class="navbar-brand" href="../index.php">
                <img src="../images/black_logo.png" alt="Logo" width="30" height="30">
                <p>OUTREACH</p>
            </a>



            <div class="urgent_div">
                <button class="btn urgent" id="urgentBtn" type="button">
                    <span class="material-symbols-outlined">call</span>
                    Talk to a Therapist
                </button>
            </div>


            <div class="urgent_div">
                <button class="btn login" type="button"></button>
                <button class="btn signup" type="button">Log In</button>
            </div>

        </div>
    </nav>


    <div id="ripple-effect"></div>

    <section class="home" style="position: relative; overflow: hidden;">
        <div class="hands">
            <div class="white"></div>
            <img src="images/hands1.png" alt="">
        </div>


        <section>
            <!-- Imput checkbox inside form -->
            <form action="" method="post" class="container mt-5 p-4 rounded shadow bg-light" style="max-width: 700px;">
                <div class="d-flex justify-content-center align-items-center header">
                    <span class="material-symbols-outlined">indeterminate_question_box</span>
                    <h1 class="mb-4">Please Kindly Indicate</h1>
                </div>
                <?php
                // Fetch all problems from DB
                $problems = $conn->query("SELECT id, issues FROM problems");
                ?>

                <div class="mb-4">
                    <label class="form-label fw-bold">What problems we can help you with?</label>

                    <div class="row">
                        <?php while ($issues = $problems->fetch_assoc()): ?>
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="problems[]"
                                        value="<?php echo $issues['id']; ?>"
                                        id="problem_<?php echo $issues['id']; ?>">
                                    <label
                                        class="form-check-label"
                                        for="problem_<?php echo $issues['id']; ?>">
                                        <?php echo htmlspecialchars($issues['issues']); ?>
                                    </label>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <p class="text-danger mt-1 t"><?php echo $errors['problems']; ?></p>
                </div>

                <button type="submit" name="special" class="btn btn-primary w-100">Submit Application</button>

            </form>


        </section>

    </section>

    <script src="help.js" ></script>


</body>

</html>