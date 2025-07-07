<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outreach</title>

    <!-- Documents Links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/temail-sent.css">
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
             
            </div>
        </nav>

        <main>

                    

            <div class="form col-12">


                <div class="form_cont container d-flex justify-content-center align-items-center">
                    <h1>Enter OTP code</h1>
                    <h6>We sent a Code to <span class="colored">outreach.coree@gmail.com</span></h6>
                    

                    <form action="" method="post" class=" w-100 w-md-75 w-lg-50 p-4 ">

                        <div class="inputs-div">
                            <input type="text" class="otp" inputmode="numeric" maxlength="1" required>
                            <input type="text" class="otp" inputmode="numeric" maxlength="1" required>
                            <input type="text" class="otp" inputmode="numeric" maxlength="1" required>
                            <input type="text" class="otp" inputmode="numeric" maxlength="1" required>
                            <input type="text" class="otp" inputmode="numeric" maxlength="1" required>
                            <input type="text" class="otp" inputmode="numeric" maxlength="1" required>
                        </div>

                        <div style="display: flex; justify-content: center; align-items: center;">
                            <button id="clearOtp" class="btn btn-outline-secondary clear-btn">Clear Code</button>
                        </div>

                        <div class="d-grid mt-3">
                            <input type="submit" class="btn btn-primary submit" name="v_submit" value="Send Email">
                        </div>

                        
                    </form>

                    <p> <a href="#">Resend Code</a></p>
                </div>

            </div>

        </main>

    </section>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/temail-sent.js"></script>
</body>


</html>