import { renderNavbar } from "./navbar.js";
import { handleResponses } from "./responses.js";

document.addEventListener("DOMContentLoaded", () => {
  renderNavbar();
  handleResponses();
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
