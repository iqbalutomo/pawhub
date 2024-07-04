const renderNavbar = () => {
  fetch("./src/components/navbar.html")
    .then((resp) => resp.text())
    .then((data) => {
      document.getElementById("navbar").innerHTML = data;
      setActiveLink();
    })
    .catch((err) => console.error("Error fetching navbar: ", err));
};

function setActiveLink() {
  const path = window.location.pathname;
  const page = path.split("/").pop();

  switch (page) {
    case "index.html":
      document.getElementById("nav-home").classList.add("active");
      break;
    case "about-us.html":
      document.getElementById("nav-about-us").classList.add("active");
      break;
    case "services.html":
      document.getElementById("nav-services").classList.add("active");
      break;
    case "gallery.html":
      document.getElementById("nav-gallery").classList.add("active");
      break;
    case "contact-us.html":
      document.getElementById("nav-contact-us").classList.add("active");
      break;
    default:
      document.getElementById("nav-home").classList.add("active");
      break;
  }
}

export { renderNavbar };
