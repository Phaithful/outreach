<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outreach</title>

    <!-- Documents Links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/psignup.css">
    <link rel="icon" href="images/white_logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    



</head>


<body>
    

    <section>

        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="images/black_logo.png" alt="Logo" width="30" height="30">
                    <p>OUTREACH</p>
                </a>


                <!-- Urgent/sucide cases -->
                <div class="urgent_div">
                    <p>Urgent Help? </p>
                    <button class="btn urgent" id="urgentBtn" type="button">Talk to a Therapist</button>
                </div>
             
            </div>
        </nav>

        <main>

                    

            <div class="form col-12">>

                <div class="details">
                    <div class="hero-message">
                        <p id="typedText"></p>
                    </div>
                </div>


                <div class="form_cont container d-flex justify-content-center align-items-center">
                    <h6>JOIN OUTREACH TODAY</h6>
                    <h1>Create a new account<span class="colored">.</span></h1>

                    <form action="" class=" w-100 w-md-75 w-lg-50 p-4 ">
                        <div class="mb-3 email_div">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" placeholder="Enter email" class="form-control" required>
                            <span class="material-symbols-outlined mail_icon">mail</span>
                        </div>

                        <div class="mb-3 password_div">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="pass" placeholder="********" class="form-control" id="password" required>
                            <span class="eye-icon fas fa-thin fa-eye-slash" id="togglePassword"></span> 
                        </div>

                        <div class="d-grid mt-3">
                            <input type="submit" class="btn btn-primary submit" name="v_submit" value="Join Community">
                        </div>
                    </form>

                    <p>already a member? <a href="#">Log In</a></p>
                </div>

            </div>

        </main>

    </section>




    <script src="assets/js/psignup.js"></script>
</body>


</html>