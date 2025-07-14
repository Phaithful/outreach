
document.addEventListener('DOMContentLoaded', () => {

    // Click ripple interaction
    document.addEventListener('click', (e) => {
        const ripple = document.createElement('div');
        ripple.className = 'click-ripple';

        // Position properly
        ripple.style.left = `${e.clientX}px`;
        ripple.style.top = `${e.clientY}px`;

        document.body.appendChild(ripple);
        setTimeout(() => ripple.remove(), 1000);
    });



    const circles = document.querySelectorAll(".mission .circle");

    const observer = new IntersectionObserver(
        entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
            // Add animate class
            circles.forEach(circle => {
                circle.classList.add("animate");
            });
            } else {
            // Remove animate class when out of view
            circles.forEach(circle => {
                circle.classList.remove("animate");
            });
            }
        });
        },
        {
        threshold: 0.4,
        }
    );

    observer.observe(document.querySelector(".mission"));




    // Swiper Js
    const swiper = new Swiper(".partnerSwiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: true,
    speed: 4000,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    freeMode: true,
    freeModeMomentum: false,
    grabCursor: true,
    });

    // Pause on hover, resume on leave
    const swiperEl = document.querySelector('.partnerSwiper');

    swiperEl.addEventListener('mouseenter', () => {
    swiper.autoplay.stop();
    });

    swiperEl.addEventListener('mouseleave', () => {
    swiper.autoplay.start();
    });



    // learn more buttons
    // for private sessions div...
    const learnBtn = document.getElementById("privateLearn");
    const closeBtn = document.getElementById("privateClose");
    const dots = document.getElementById("dots");
    const extraWrapper = document.getElementById("extraWrapper");

    closeBtn.style.display = "none";

    learnBtn.addEventListener("click", function () {
        dots.style.display = "none";
        extraWrapper.classList.add("open");
        learnBtn.style.display = "none";
        closeBtn.style.display = "inline-block";
    });

    closeBtn.addEventListener("click", function () {
        extraWrapper.classList.remove("open");
        learnBtn.style.display = "inline-block";
        closeBtn.style.display = "none";
        dots.style.display = "inline";
    });

    // for 24/7 div
    const all_day = document.getElementById("all_day");
    const closeBtn2 = document.getElementById("all-dayClose");
    const dots2 = document.getElementById("dots2");
    const extraWrapper2 = document.getElementById("extraWrapper2");

    closeBtn2.style.display = "none";

    all_day.addEventListener("click", function () {
        dots2.style.display = "none";
        extraWrapper2.classList.add("open");
        all_day.style.display = "none";
        closeBtn2.style.display = "inline-block";
    });

    closeBtn2.addEventListener("click", function () {
        extraWrapper2.classList.remove("open");
        all_day.style.display = "inline-block";
        closeBtn2.style.display = "none";
        dots2.style.display = "inline";
    });

    // for anonymous div
    const anonymous= document.getElementById("anonymous");
    const closeBtn3 = document.getElementById("anonymousClose");
    const dots3 = document.getElementById("dots3");
    const extraWrapper3 = document.getElementById("extraWrapper3");

    closeBtn3.style.display = "none";

    anonymous.addEventListener("click", function () {
        dots3.style.display = "none";
        extraWrapper3.classList.add("open");
        anonymous.style.display = "none";
        closeBtn3.style.display = "inline-block";
    });

    closeBtn3.addEventListener("click", function () {
        extraWrapper3.classList.remove("open");
        anonymous.style.display = "inline-block";
        closeBtn3.style.display = "none";
        dots3.style.display = "inline";
    });



    




    const modal = document.getElementById('registerModal');
    const registerBtn = document.getElementById('registerBtn');
    const loginModal = document.getElementById('loginModal');
    const loginBtn = document.getElementById('loginBtn');

    // Toggle modals
    registerBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        modal.classList.toggle('show');
        loginModal.classList.remove('show'); 
    });

    loginBtn.addEventListener('click', (e) => {
        e.stopPropagation(); 
        loginModal.classList.toggle('show');
        modal.classList.remove('show'); 
    });

    // Close login and signup modals if clicked outside
    document.addEventListener('click', (event) => {
        const clickedInsideRegister = modal.contains(event.target) || registerBtn.contains(event.target);
        const clickedInsideLogin = loginModal.contains(event.target) || loginBtn.contains(event.target);

        if (!clickedInsideRegister) {
            modal.classList.remove('show');
        }

        if (!clickedInsideLogin) {
            loginModal.classList.remove('show');
        }
    });


    document.querySelectorAll('.like').forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('liked');
        });
    });



});