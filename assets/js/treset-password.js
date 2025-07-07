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