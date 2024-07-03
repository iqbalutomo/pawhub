const renderNavbar = () => {
  fetch("./src/components/navbar.html")
    .then((resp) => resp.text())
    .then((data) => {
      document.getElementById("navbar").innerHTML = data;
      document.querySelectorAll(".nav-link").forEach((link) => {
        link.addEventListener("click", (e) => {
          e.preventDefault();
          const page = e.target.getAttribute("data-page");
          const title = e.target.getAttribute("data-title");

          setActiveNav(e);
          renderPage(page, title);
        });
      });
    })
    .catch((err) => console.error("Error fetching navbar: ", err));
};

const renderPage = (page, title) => {
  fetch(`./src/pages/${page}`)
    .then((resp) => resp.text())
    .then((data) => {
      document.getElementById("content").innerHTML = data;
      document.title = title;

      if (title === "PawHub | Home") {
        document.getElementById("nav-home").classList.add("active");
      }
    })
    .catch((err) => console.error("Error loading page: ", err));
};

const setActiveNav = (e) => {
  const navActive = document.querySelector(".active");
  if (navActive !== null) {
    navActive.classList.remove("active");
  }
  e.target.className = "active nav-link fs-5";
};

export { renderNavbar, renderPage };
