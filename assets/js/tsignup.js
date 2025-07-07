const sentences = [
  "Ever wished you could help someone feel",
  "less alone or hopeless?",
  "Your words might be the lifeline ",
  "someone is ernestly searching for.",
  "Be the voice of calm in someone’s storm.",
  "Join the OUTREACH Community ",
  "of compassionate listeners Today!"
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

        sentenceIndex = 0; typeSentence(); 
      }
    }, 300); 
  }
}

typeSentence();



// Toggle password visibility
const togglePassword = document.getElementById('togglePassword');
const toggleConfirmPassword = document.getElementById('toggleCPassword');
const passwordInput = document.getElementById('password');
const cPasswordInput = document.getElementById('cpassword');

togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);


    // Toggle icon
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});


toggleConfirmPassword.addEventListener("click", function(){

    const type = cPasswordInput.getAttribute("type") === 'password' ? 'text' : 'password';

    console.log('Changing confirm password input type to:', type);  // Add this
    cPasswordInput.setAttribute('type', type);

    console.log(toggleConfirmPassword);


    // Toggle icon
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');

})


