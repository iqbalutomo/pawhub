import { renderNavbar, renderPage } from "./navbar.js";

document.addEventListener("DOMContentLoaded", (e) => {
  renderNavbar();
  renderPage("home.html", "PawHub | Home");
});
