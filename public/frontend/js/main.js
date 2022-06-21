const nav_menu = document.getElementById('nav-menu');

const toggle_menu = document.getElementById('toggle-menu');
const close_menu = document.getElementById('close-menu');

const userLoginBtn = document.getElementById("user-login-btn");

const formWrapper = document.getElementById("form-wrapper-show");
const formWrapperCloseBtn = document.getElementById("form-closing-btn");

const registerForm = document.getElementById('register-form');
const loginForm = document.getElementById('login-form');
const registerBtn = document.getElementById('login-signup-btn');
const loginBtn = document.getElementById('login-btn');




registerBtn.addEventListener('click', () => {
    registerForm.classList.toggle('register-active');
    loginForm.classList.remove('login-active');
})


/* form wrapper */
userLoginBtn.addEventListener('click', () => {
    formWrapper.classList.toggle('form-wrapper-show');
    loginForm.classList.toggle('login-active');
})

formWrapperCloseBtn.addEventListener('click', () => {
    formWrapper.classList.remove('form-wrapper-show');
})


/* nabar controlling */
toggle_menu.addEventListener('click', () => {
    nav_menu.classList.toggle('show');
})

close_menu.addEventListener('click', () => {
    nav_menu.classList.remove('show');
})