
document.addEventListener('DOMContentLoaded', () => {

    // const gradients = [
    // ['rgba(154, 213, 153, 1)', 'rgba(255, 255, 255, 0.2)'],
    // ['rgba(129, 182, 193, 0.6)', 'rgba(255, 255, 255, 0.2)'],
    // ['rgba(157, 151, 199, 0.6)', 'rgba(255, 255, 255, 0.2)'],
    // ['rgba(174, 134, 185, 0.6)', 'rgba(255, 255, 255, 0.2)'],
    // ['rgba(195, 145, 182, 0.6)', 'rgba(255, 255, 255, 0.2)']
    // ];


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



    // function createRandomRipple() {
    //     const ripple = document.createElement('div');

    //     ripple.className = 'click-ripple';

    //     // Generate a random position within the viewport
    //     const x = Math.random() * window.innerWidth;
    //     const y = Math.random() * window.innerHeight;


    //     ripple.style.left = `${x}px`;
    //     ripple.style.top = `${y}px`;


    //     document.body.appendChild(ripple);

    //     // Remove the ripple after it fades out
    //     setTimeout(() => ripple.remove(), 1000);
    // }

    // function createRandomSRipple() {
    //     const sripple = document.createElement('div');

    //     sripple.className = 'sclick-ripple'

    //     // Generate a random position within the viewport

    //     const x2 = Math.random() * window.innerWidth;
    //     const y2 = Math.random() * window.innerHeight;

    //     sripple.style.left = `${x2}px`;
    //     sripple.style.top = `${y2}px`;

    //     document.body.appendChild(sripple);

    //     // Remove the ripple after it fades out
    //     setTimeout(() => sripple.remove(), 1000)
        
    // }

    // // Call the function every 2 seconds (or adjust timing)
    // setInterval(createRandomRipple, 1200);
    // setInterval(createRandomSRipple, 1900)



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



});