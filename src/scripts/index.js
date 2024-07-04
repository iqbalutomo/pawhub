import { renderNavbar } from "./navbar.js";

document.addEventListener("DOMContentLoaded", () => {
  renderNavbar();

  // toast register responses
  var urlParams = new URLSearchParams(window.location.search);
  if (urlParams.has("error", "email_exists")) {
    var toastElement = document.getElementById("emailExistsToast");
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
  if (urlParams.has("success", "registration")) {
    var toastElement = document.getElementById("successRegisterToast");
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
  }

  // toast login responses
  var urlParams = new URLSearchParams(window.location.search);
  if (urlParams.has("error", "invalid_login")) {
    var toastElement = document.getElementById("invalidToast");
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
  if (urlParams.has("success", "login")) {
    var toastElement = document.getElementById("successLoginToast");
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
});

// preloader
const preloader = document.querySelector(".preloader");
const fadeOutEffect = setInterval(() => {
  if (!preloader.style.opacity) {
    preloader.style.opacity = 1;
  }
  if (preloader.style.opacity > 0) {
    preloader.style.opacity -= 2;
  } else {
    clearInterval(fadeOutEffect);
    preloader.style.display = "none";
  }
}, 300);

// floating button
let floater = document.getElementById("floater");
let lastScrollTop = 0;

window.addEventListener("scroll", function () {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    // scrolling down
    floater.style.opacity = "1";
    floater.style.visibility = "visible";
  } else {
    // scrolling up
    floater.style.opacity = "0";
    floater.style.visibility = "hidden";
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // navigate scrolling
});

floater.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
