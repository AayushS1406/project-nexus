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
    loginBtn.style.backgroundColor = "#e29d09";
    registerBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";

    loginForm.style.left= "50%";
    registerForm.style.left= "-50%";

    loginForm.style.opacity = 1;
    registerForm.style.opacity = 0;

    document.querySelector(".col-1").style.borderRadius="0 30% 20% 0"
})
registerBtn.addEventListener('click',() =>{
    loginBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";
    registerBtn.style.backgroundColor = "#e29d09";

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
  document.addEventListener("DOMContentLoaded", function() {
    var popup = document.getElementById('signupSuccessPopup');
    if (popup.innerText.trim() !== "") {
        popup.classList.add('show');
    }
});
document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      window.scrollTo({
        top: target.offsetTop - 70,
        behavior: 'smooth'
      });
    });
  });
});

// passwordInput.addEventListener('input', () => {
//     const passwordLength = passwordInput.value.length;
//     if (passwordLength < 8) {
//       alert('Password must be at least 8 characters');
//     }
//   });