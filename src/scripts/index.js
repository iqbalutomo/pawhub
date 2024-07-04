import { renderNavbar, renderPage } from "./navbar.js";

document.addEventListener("DOMContentLoaded", (e) => {
  renderNavbar();
  renderPage("contact-us.html", "PawHub | Home");
});

// floating button
const floater = document.getElementById("floater");
const lastScrollTop = 0;

window.addEventListener("scroll", function () {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    // Scrolling down
    floater.style.opacity = "1";
    floater.style.visibility = "visible";
  } else {
    // Scrolling up
    floater.style.opacity = "0";
    floater.style.visibility = "hidden";
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
});

floater.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
