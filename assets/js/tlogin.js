document.addEventListener("DOMContentLoaded", (event) => {

    const sentences = [
    "Carrying pain you can't explain?",
    "Wishing someone would just listen... ",
    "without judging or see you as weak.",
    "We're here. Anonymous, safe,",
    "and built just for you!",
    "Join the OUTREACH Community"
    ];

    const typedText = document.getElementById("typedText");
    let sentenceIndex = 0;
    let charIndex = 0;

    function typeSentence() {
    const currentSentence = sentences[sentenceIndex];
    
    if (charIndex < currentSentence.length) {
        typedText.textContent += currentSentence.charAt(charIndex);
        charIndex++;
        setTimeout(typeSentence, 130); 
    } else {
        setTimeout(() => {
        typedText.textContent = '';
        charIndex = 0;
        sentenceIndex++;
        if (sentenceIndex < sentences.length) {
            typeSentence();
        } else {
            sentenceIndex = 0; typeSentence(); // ← if you want to loop
        }
        }, 300); 
    }
    }

    typeSentence();


    

    // Toggle password visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Toggle icon
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

});













