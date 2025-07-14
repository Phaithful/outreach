<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTREACH</title>

    <!-- Document Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="images/white_logo.png" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Swiper CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



</head>

<body>

    

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            

            <a class="navbar-brand" href="#">
                <img src="images/black_logo.png" alt="Logo" width="30" height="30">
                <p>OUTREACH</p>
            </a>


        
            <div class="urgent_div">
                <button class="btn urgent" id="urgentBtn" type="button">
                    <span class="material-symbols-outlined">call</span>
                    Talk to a Therapist
                </button>
            </div>

        
            <div >
                <button class="btn login" id="registerBtn" type="button">
                    Login
                </button>
                <button class="btn signup" id="loginBtn" type="button">
                    Sign Up
                </button>
            </div>
            
        </div>
    </nav>

    
    <div id="ripple-effect"></div>


    <!-- signup modal -->
    <div class="register_modal" id="registerModal">

        <div class="modal_content">
            <div class="as_professional">
                <img src="images/voice.png" alt="">
                <a href="plogin.php">Login in as Voice</a>
            </div>
            <hr>
            <div class="as_student">
                <img src="images//listener.png" alt="">
                <a href="tlogin.php">Login in as Listener</a>
            </div>
        </div>
        
    </div>

    <!-- login modal -->
    <div class="login_modal" id="loginModal">

        <div class="modal_content">
            <div class="as_school">
                <img src="images/voice.png" alt="">
                <a href="psignup.php">Sign in as Voice</a>
            </div>
            <hr>
            <div class="as_professional">
                <img src="images/listener.png" alt="">
                <a href="tsignup.php">Sign in as Listener</a>
            </div>
        </div>
        
    </div>
    

    <section class="home" style="position: relative; overflow: hidden;">
        <div class="hands">
            <div class="white"></div>
            <img src="images/hands1.png" alt="">
        </div>

        

        <div class="content">
            <div class="tag">
                <span class="material-symbols-outlined">psychiatry</span>
                <p>Inspiring Hope • Healing Hearts</p>
            </div>

            <h1 class="fade-item delay-2">You’ve <span class="c1" style="color: #0ea5e9;">Held</span> It In Long <span class="c2" style="color:rgb(22, 147, 68);">Enough</span>.</h1>
            <p class="fade-item delay-3">
                In the quiet moments of struggle, a kind voice can change everything. <br>
                Outreach is your space to share, reflect, and begin again<br>
                in your own words, at your own pace.
            </p>

            <div class="home_buttons fade-item delay-4">

                <a href="#mission" class="connect fade-r">
                    <span class="material-symbols-outlined">explore</span>
                    Explore
                </a>

                <button class="learn">
                    <span class="material-symbols-outlined">shield_with_heart</span>
                    24/7 support
                </button>
            </div>
        </div>
    </section>



    <section class="mission" id="mission">
        <div class="mission-cont">

            <div class="col-6 info">
                <div class="tag">
                    <span class="material-symbols-outlined">shield</span>
                    <p>Trusted • Professional • Compassionate</p>
                </div>

                <h1>Our <span>Mission</span></h1>
                <p class="description">To provide a safe, accessible, and confidential space where individuals facing emotional distress can connect with compassionate listeners and qualified therapists; anytime, anywhere.</p>

                <div class="stat">
                    <div>
                        <div class="circle-bg1">
                            <span class="material-symbols-outlined SI1">check_circle</span>
                        </div>
                        <p>Qualified mental health professionals</p>
                    </div>

                    <div>
                        <div class="circle-bg2" >
                            <span class="material-symbols-outlined SI2">schedule</span>
                        </div>
                        <p>24/7 crisis support and guidance</p>
                    </div>

                    <div>
                        <div class="circle-bg3" > 
                            <span class="material-symbols-outlined SI3">psychiatry</span>
                        </div>
                        <p>Personalized healing approaches</p>
                    </div>

                    <div>
                        <div class="circle-bg4" >
                            <span class="material-symbols-outlined SI4">encrypted</span>
                        </div> 
                        <p>Confidential and secure support</p>
                    </div>

                </div>
            </div>


            <div class="col-6 mission-img-cont">
                <img src="images/mission.png" alt="" >
            </div>
            
        </div>
        
    </section>


    <section class="vision">
        <div class="vision-cont">

            <div class="col-6 vision-img-cont">
                <img src="images/confrence.png" alt="" >
            </div>

            <div class="col-6 info">
                <div class="tag">
                    <span class="material-symbols-outlined">lightbulb_2</span>
                    <p>Inclusive • Impact-Driven • Future-Focused</p>
                </div>

                <h1>Our <span>Vision</span></h1>
                <p class="description">To become the leading digital sanctuary for mental well-being in Africa; a place where no one feels alone, unheard, or ashamed to seek help.</p>

                <div class="stat">
                    <div>
                        <div class="circle-bg1">
                            <span class="material-symbols-outlined SI1">accessibility</span>
                        </div>
                        <p>Accessible mental health care across Africa</p>
                    </div>

                    <div>
                        <div class="circle-bg2" >
                            <span class="material-symbols-outlined SI2">volunteer_activism</span>
                        </div>
                        <p>Empowering communities through empathy</p>
                    </div>

                    <div>
                        <div class="circle-bg3" > 
                            <span class="material-symbols-outlined SI3">network_intel_node</span>
                        </div>
                        <p>Innovation-driven mental wellness tools</p>
                    </div>

                    <div>
                        <div class="circle-bg4" >
                            <span class="material-symbols-outlined SI4">safety_divider</span>
                        </div> 
                        <p>A safe space built on trust and dignity</p>
                    </div>

                </div>
            </div>


            
            
        </div>
        
    </section>


    

    <section class="partner-slider container-fluid px-0">

        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
                <!-- Each logo inside a swiper-slide -->
                <div class="swiper-slide"><img src="images/partners/capitis-logo.0fdb9306.svg" alt="Partner 1"></div>
                <div class="swiper-slide"><img src="images/partners/enugu-sme-logo.88c278f3.svg" alt="Partner 2"></div>
                <div class="swiper-slide"><img src="images/partners/esg-logo.5e44c702.svg" alt="Partner 3"></div>
                <div class="swiper-slide"><img src="images/partners/genesys-logo.df6b6556.svg" alt="Partner 4"></div>
                <div class="swiper-slide"><img src="images/partners/ode-logo.68d565cf.svg" alt="Partner 5"></div>
                <div class="swiper-slide"><img src="images/partners/peter-mbah-logo.f77990af.svg" alt="Partner 6"></div>
                <div class="swiper-slide"><img src="images/partners/the-garage-logo.9cd53ada.svg" alt="Partner 7"></div>
                <!-- You can duplicate logos for smoother loop -->
            </div>
        </div>
    </section>


    <section class="services">
        <div class="tag">
            <span class="material-symbols-outlined">heart_check</span>
            <p>How We Support Your Journey</p>
        </div>
        <h1>Pathways to <span>Healing</span></h1>
        <h6>Discover the support that's right for you. Our comprehensive services are designed to meet you exactly where you are.</h6>

        <div class="container p-5">
            <div class="d-flex flex-wrap justify-content-between gap-4">
                
                <div class="case-box bg-light text-center p-4">
                    <img src="images/private.png" alt="">
                    <div class="circle2-bg1">
                        <span class="material-symbols-outlined SI1">safety_divider</span>
                    </div>
                    <h3>Private Therapy Sessions</h3>
                    <!-- <p>
                        Connect with trained mental health professionals through your preferred method — secure chat, private audio calls, or
                        <span id="dots">...</span>
                        <span id="extraWrapper">
                            <span id="extra">face-to-face video sessions. Whether you want to write it out or talk it through, we meet you where you’re most comfortable.</span>
                        </span>
                    </p> -->

                    <p>
                        Connect with trained mental health professionals through your preferred method — secure chat, private audio calls, or
                        <span id="dots">...</span>
                        <span id="extraWrapper">
                            <span id="extra"> face-to-face video sessions. Whether you want to write it out or talk it through, we meet you where you’re most comfortable.</span>
                        </span>
                    </p>
                    <button class="service_btn" id="privateLearn">Learn More</button>
                    <button class="service_btn" id="privateClose">Close</button>
                </div>

                <div class="case-box bg-light text-center p-4">
                    <img src="images/247.png" alt="">
                    <div class="circle2-bg2">
                        <span class="material-symbols-outlined SI2">schedule</span>
                    </div>
                    <h3>24/7 Emotional Support</h3>
                    <p>
                        Emotions don’t follow a 9-to-5. That’s why we’re here day and night, ready to support you through 
                        <span id="dots2">...</span>
                        <span id="extraWrapper2">
                            <span id="extra"> anxiety, sadness, overwhelm, or anything else. Reach out whenever you need to. We’re always listening.</span>
                        </span>
                    </p>

                    <button class="service_btn" id="all_day">Learn More</button>
                    <button class="service_btn" id="all-dayClose">Close</button>
                </div>

                <div class="case-box bg-light text-center p-4">
                    <img src="images/anonymous.png" alt="">
                    <div class="circle2-bg3">
                        <span class="material-symbols-outlined SI3">public_off</span>
                    </div>
                    <h3>Total Anonymity</h3>
                    <p>
                        We understand that safety and privacy are everything. That’s why you can share openly — no names, 
                        <span id="dots3">...</span>
                        <span id="extraWrapper3">
                            <span id="extra"> no pressure. Your identity stays protected, and your voice is heard with compassion, not judgment</span>
                        </span>
                    </p>

                    <button class="service_btn" id="anonymous">Learn More</button>
                    <button class="service_btn" id="anonymousClose">Close</button>
                </div>

            </div>
        </div>

    </section>


    <section class="review">

        <div class="tag">
            <span class="material-symbols-outlined">person_heart</span>
            <p>What motivates us</p>
        </div>
        <h1>Stories That <span>Inspire</span></h1>
        <p class="review_des">Every conversation makes a difference. Hear from the Voices who found hope, comfort, and healing, and from the Listeners who offered their time and compassion.</p>

        <div class="review_cont">
            
            <div class="reviews-track">
                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                    
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>

                <div class="reviews">
                    <h3>Listener092</h3>
                    <div class="quote1">
                        <span class="material-symbols-outlined up"> format_quote</span>
                        <div></div>
                    </div>
                    <p>Joining Outreach as a Listener has not just helped me do what i love most which is helping others, it has also given me the opportunioty to discover more of myself and understand the world on a deeper level. I just Love it</p>
                    <div class="quote2">
                        <div></div>
                        <span class="material-symbols-outlined down"> format_quote</span>
                    </div>
                    <span class="material-symbols-outlined like" >favorite</span>
                </div>
            </div>

            
        </div>
        
    </section>


    <footer class=" py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-3 mb-4 mb-md-0 logo-cont">
                    <div class="logo">
                        <img src="images/black_logo.png" alt="">
                        <h4>Outreach</h4>
                    </div>
                    <p>Inspiring hope, facilitating healing, and empowering mental wellness journeys.</p>
                </div>
                <div class="col-12 col-md-3 mb-4 mb-md-0 service" >
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none" style="color: #a3a3a3">Private Therapy</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Crisis Support</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Audio Calls</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-4 mb-md-0 support">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">FAQ</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Pricavy Policy</a></li>
                        <li><a href="#" class=" text-decoration-none" style="color: #a3a3a3">Contact</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 contact">
                    <h5>Stay Connected</h5>
                    <p>Subscribe to our newsletter for updates.</p>
                    <form>
                    <input type="email" class="form-control mb-2" placeholder="Email address">
                    <button type="submit" class="btn btn-outline-light w-100">Subscribe</button>
                    </form>
                </div>
            </div>
            <hr class="mt-4">
            <p class="text-center mb-0">&copy; 2025 Outreach. All rights reserved. Your mental health matters. You are not alone.</p>
        </div>
    </footer>



    


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>






