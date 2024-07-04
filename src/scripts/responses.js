const handleResponses = () => {
  // toast register responses
  const urlParams = new URLSearchParams(window.location.search);

  if (urlParams.has("error", "email_exists")) {
    let toastElement = document.getElementById("emailExistsToast");
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
  if (urlParams.has("success", "registration")) {
    let toastElement = document.getElementById("successRegisterToast");
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
  }

  // toast login responses
  if (urlParams.has("error", "invalid_login")) {
    let toastElement = document.getElementById("invalidToast");
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
  if (urlParams.has("success", "login")) {
    let toastElement = document.getElementById("successLoginToast");
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
  }

  // toast contact form responses
  if (urlParams.has("error", "contact-form")) {
    let toastElement = document.getElementById("errorContactFormToast");
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
  if (urlParams.has("success", "contact-form")) {
    let toastElement = document.getElementById("successContactFormToast");
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
};

export { handleResponses };
