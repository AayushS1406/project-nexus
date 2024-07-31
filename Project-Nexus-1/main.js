const loginBtn = document.querySelector("#login");
const registerBtn = document.querySelector("#register");
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");
const passwordInput = document.getElementById('password');
const passwordError = document.getElementById('password-error');
const passwordInput1 = document.getElementById('password-1');
const passwordError1 = document.getElementById('password-error-1');
const emailInput = document.getElementById('email');
const emailError = document.getElementById('email-error');


loginBtn.addEventListener('click',() =>{
    loginBtn.style.backgroundColor = "#21264D";
    registerBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";

    loginForm.style.left= "50%";
    registerForm.style.left= "-50%";

    loginForm.style.opacity = 1;
    registerForm.style.opacity = 0;

    document.querySelector(".col-1").style.borderRadius="0 30% 20% 0"
})
registerBtn.addEventListener('click',() =>{
    loginBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";
    registerBtn.style.backgroundColor = "#21264D";

    loginForm.style.left= "150%";
    registerForm.style.left= "50%";

    loginForm.style.opacity = 0;
    registerForm.style.opacity = 1;

    document.querySelector(".col-1").style.borderRadius="0 20% 30% 0"
})
passwordInput.addEventListener('input', () => {
    const passwordLength = passwordInput.value.length;
    if (passwordLength < 6) {
      passwordError.classList.add('show');
    } else {
      passwordError.classList.remove('show');
    }
});

passwordInput1.addEventListener('input', () => {
    const passwordLength = passwordInput1.value.length;
    if (passwordLength < 6) {
      passwordError1.classList.add('show');
    } else {
      passwordError1.classList.remove('show');
    }
});
emailInput.addEventListener('input', () => {
    const emailValue = emailInput.value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  
    if (!emailRegex.test(emailValue)) {
      emailError.classList.add('show');
    } else {
      emailError.classList.remove('show');
    }
  });
// passwordInput.addEventListener('input', () => {
//     const passwordLength = passwordInput.value.length;
//     if (passwordLength < 8) {
//       alert('Password must be at least 8 characters');
//     }
//   });