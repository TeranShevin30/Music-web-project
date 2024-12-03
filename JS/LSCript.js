const loginText = document.querySelector(".title-text .login");
const signupText = document.querySelector(".title-text .signup");
const loginForm = document.querySelector("form.login");
const signupForm = document.querySelector("form.signup");
const slider = document.querySelector(".slider");

document.getElementById("signup").onclick = () => {
  loginForm.style.marginLeft = "-50%";
  signupForm.style.marginLeft = "0%";
  slider.style.transform = "translateX(100%)";
};

document.getElementById("login").onclick = () => {
  loginForm.style.marginLeft = "0%";
  signupForm.style.marginLeft = "50%";
  slider.style.transform = "translateX(0%)";
};
