<?php
session_start();

$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PawHub | Home</title>
    <!-- CDN bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- global css -->
    <link href="./styles/globals.css" rel="stylesheet" />
  </head>
  <body>
    <!-- preloader for handle re-render page -->
    <div class="preloader"></div>

    <!-- toast responses -->
    <div
      class="position-fixed bg-opacity-100 top-0 translate-middle-x start-50 p-3 align-items-center"
      style="z-index: 11"
    >
      <!-- toast success register -->
      <div
        id="successRegisterToast"
        class="toast top-0 align-items-center text-bg-success border-0"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="d-flex">
          <div class="toast-body">Registration Successfully!</div>
          <button
            type="button"
            class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
      </div>
      <!-- toast email exists register -->
      <div
        id="emailExistsToast"
        class="toast top-0 align-items-center text-bg-warning border-0"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="d-flex">
          <div class="toast-body">Email address already exists!</div>
          <button
            type="button"
            class="btn-close btn-close-black me-2 m-auto"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
      </div>

      <!-- toast success login -->
      <div
        id="successLoginToast"
        class="toast top-0 align-items-center text-bg-success border-0"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="d-flex">
          <div class="toast-body">Login Successfully!</div>
          <button
            type="button"
            class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
      </div>
      <!-- toast invalid login -->
      <div
        id="invalidToast"
        class="toast top-0 align-items-center text-bg-danger border-0"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
      >
        <div class="d-flex">
          <div class="toast-body">Email or password invalid!</div>
          <button
            type="button"
            class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast"
            aria-label="Close"
          ></button>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- dynamic navbar -->
      <div id="navbar"></div>

      <!-- content -->
      <!-- Hero -->
      <div class="mx-5 mt-120">
        <div class="d-flex align-items-center justify-content-between">
          <div class="container">
            <h1 class="fw-bold fs-70">Connecting Hearts and Paws</h1>
            <p class="fs-4">
              Together, we can make a paw-sitive impact on the lives of
              countless cats. Join us and become a hero for these furry friends.
            </p>
            <a
              type="button"
              href="#donate"
              class="btn btn-dark py-2 px-5 fs-4 rounded-5"
            >
              Donate
            </a>
          </div>
          <div class="pulse">
            <img src="./assets/images/hero.png" width="500" />
          </div>
        </div>
      </div>

      <!-- Donations -->
      <section id="donate" data-bs-spy="scroll" class="mt-120">
        <div class="text-center">
          <h1 class="fw-bold fs-1">Donate Now</h1>
          <p class="fs-5">Your Donation, Their Happiness</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <a href="./donate.html"
                ><img
                  src="./assets/images/paws/paw-1.jpg"
                  class="card-img-top"
                  height="280"
                  style="cursor: pointer"
                  alt="paw"
              /></a>
              <div class="card-body">
                <h5 class="card-title">Warm Shelter for Manis</h5>
                <div class="my-4">
                  <p class="card-text text-truncate">
                    Manis has been living on the streets and needs a safe, warm
                    place to call home. Your contribution will help build and
                    maintain a cozy shelter for Tigger and other strays.
                  </p>
                </div>

                <div>
                  <div
                    class="d-flex justify-content-between align-items-center mb-2"
                  >
                    <p class="my-auto">
                      collected
                      <span class="fw-bold text-pawhub-secondary"
                        >Rp. 600.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-primary"
                        >Rp. 820.000</span
                      >
                    </p>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Success example"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="background-color: #584d517e"
                  >
                    <div
                      class="progress-bar"
                      style="width: 73%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 10 July 2024</small
                  >
                  <a
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                    href="./donate.html"
                  >
                    Donate
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <a href="./donate.html"
                ><img
                  src="./assets/images/paws/paw-2.jpg"
                  class="card-img-top"
                  height="280"
                  style="cursor: pointer"
                  alt="paw"
              /></a>
              <div class="card-body">
                <h5 class="card-title">Feed Bella for a Month</h5>
                <div class="my-4">
                  <p class="card-text text-truncate">
                    Bella, a beautiful stray, needs regular meals and a warm
                    place to stay. By donating, you can ensure Bella has enough
                    food and shelter for an entire month.
                  </p>
                </div>

                <div>
                  <div
                    class="d-flex justify-content-between align-items-center mb-2"
                  >
                    <p class="my-auto">
                      collected
                      <span class="fw-bold text-pawhub-secondary"
                        >Rp. 200.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-primary"
                        >Rp. 249.000</span
                      >
                    </p>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Success example"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="background-color: #584d517e"
                  >
                    <div
                      class="progress-bar"
                      style="width: 75%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 15 July 2024</small
                  >
                  <a
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                    href="./donate.html"
                  >
                    Donate
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <a href="./donate.html"
                ><img
                  src="./assets/images/paws/paw-3.jpg"
                  class="card-img-top"
                  height="280"
                  style="cursor: pointer"
                  alt="paw"
              /></a>
              <div class="card-body">
                <h5 class="card-title">Treat Fluffy's Dental Issues</h5>
                <div class="my-4">
                  <p class="card-text text-truncate">
                    Fluffy has severe dental problems that make it hard for her
                    to eat. Donations will cover the cost of dental treatment,
                    ensuring Fluffy can enjoy her meals pain-free.
                  </p>
                </div>

                <div>
                  <div
                    class="d-flex justify-content-between align-items-center mb-2"
                  >
                    <p class="my-auto">
                      collected
                      <span class="fw-bold text-pawhub-secondary">$ 5</span>
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-primary">$ 25</span>
                    </p>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Success example"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="background-color: #584d517e"
                  >
                    <div
                      class="progress-bar"
                      style="width: 20%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 24 November 2024</small
                  >
                  <a
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                    href="./donate.html"
                  >
                    Donate
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <a href="./donate.html"
                ><img
                  src="./assets/images/paws/paw-4.jpg"
                  class="card-img-top"
                  height="280"
                  style="cursor: pointer"
                  alt="paw"
              /></a>
              <div class="card-body">
                <h5 class="card-title">Medical Treatment for Whiskers</h5>
                <div class="my-4">
                  <p class="card-text text-truncate">
                    Whiskers is suffering from a respiratory infection and
                    requires immediate medical attention. Your support will
                    provide the necessary medication and vet visits to nurse
                    Whiskers back to health.
                  </p>
                </div>

                <div>
                  <div
                    class="d-flex justify-content-between align-items-center mb-2"
                  >
                    <p class="my-auto">
                      collected
                      <span class="fw-bold text-pawhub-secondary">20 €</span>
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-primary">100 €</span>
                    </p>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Success example"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="background-color: #584d517e"
                  >
                    <div
                      class="progress-bar"
                      style="width: 20%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 30 July 2024</small
                  >
                  <a
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                    href="./donate.html"
                  >
                    Donate
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <a href="./donate.html"
                ><img
                  src="./assets/images/paws/paw-5.jpg"
                  class="card-img-top"
                  height="280"
                  style="cursor: pointer"
                  alt="paw"
              /></a>
              <div class="card-body">
                <h5 class="card-title">Emergency Care for Leo</h5>
                <div class="my-4">
                  <p class="card-text text-truncate">
                    Leo was hit by a car and requires emergency medical care.
                    Donations will go towards surgery, medications, and recovery
                    support. Your help can save Leo's life and bring him back to
                    good health.
                  </p>
                </div>

                <div>
                  <div
                    class="d-flex justify-content-between align-items-center mb-2"
                  >
                    <p class="my-auto">
                      collected
                      <span class="fw-bold text-success">Rp. 500.000</span>
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-primary"
                        >Rp. 500.000</span
                      >
                    </p>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Success example"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="background-color: #584d517e"
                  >
                    <div
                      class="progress-bar"
                      style="width: 100%; background-color: rgb(77, 121, 77)"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <p class="text-black">Thank You!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <a href="./donate.html"
                ><img
                  src="./assets/images/paws/paw-6.jpg"
                  class="card-img-top"
                  height="280"
                  style="cursor: pointer"
                  alt="paw"
              /></a>
              <div class="card-body">
                <h5 class="card-title">Vaccinations for Tom</h5>
                <div class="my-4">
                  <p class="card-text text-truncate">
                    Tom needs a series of vaccinations to stay healthy and
                    prevent disease. Your donation will help cover the costs of
                    these essential vaccinations and ensure Tom stays protected.
                  </p>
                </div>

                <div>
                  <div
                    class="d-flex justify-content-between align-items-center mb-2"
                  >
                    <p class="my-auto">
                      collected
                      <span class="fw-bold text-pawhub-secondary">1 $</span>
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-primary">18 $</span>
                    </p>
                  </div>
                  <div
                    class="progress"
                    role="progressbar"
                    aria-label="Success example"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="background-color: #584d517e"
                  >
                    <div
                      class="progress-bar"
                      style="width: 5.5%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 14 July 2024</small
                  >
                  <a
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                    href="./donate.html"
                  >
                    Donate
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonial 4 - Bootstrap Brain Component -->
      <section class="mt-120" style="margin-bottom: 80px">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-10 col-lg-8">
              <h2 class="display-5 mb-4">Pawsitive Impact Makers</h2>
            </div>
          </div>
        </div>

        <div class="container overflow-hidden">
          <div class="row gy-3 gy-lg-4">
            <div class="col-12 col-lg-6">
              <div class="card" style="border: 0">
                <div class="card-body p-4 p-xxl-5">
                  <blockquote class="mb-3">
                    I donated to help Snowy recover from her injury, and seeing
                    her walk again brought tears to my eyes. PawHub's dedication
                    to these cats is truly inspiring. I am proud to be a part of
                    this amazing community.
                  </blockquote>
                  <figure class="d-flex align-items-center m-0 p-0">
                    <img
                      class="m-0 rounded-circle object-fit-cover"
                      loading="lazy"
                      src="./assets/images/pawer.jpg"
                      style="object-position: 10% 100%"
                      width="100"
                      height="100"
                      alt=""
                    />
                    <figcaption class="ms-3">
                      <h4 class="mb-1 h5">Emily Johnson</h4>
                      <h5 class="fs-6 text-secondary mb-0">- Cat Lover</h5>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="card" style="border: 0">
                <div class="card-body p-4 p-xxl-5">
                  <blockquote class="mb-3">
                    We need to take care of our earth starting from taking care
                    of ourselves, the environment and also animals. You can help
                    by volunteering from donating money to shelter for paws.
                  </blockquote>
                  <figure class="d-flex align-items-center m-0 p-0">
                    <img
                      class="m-0 rounded-circle object-fit-cover"
                      loading="lazy"
                      src="./assets/images/pawer-2.jpg"
                      width="100"
                      height="100"
                      alt=""
                    />
                    <figcaption class="ms-3">
                      <h4 class="mb-1 h5">Luke Reeves</h4>
                      <h5 class="fs-6 text-secondary mb-0">- Volunteer</h5>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div id="floater" class="flex-column">
      <img src="./assets/images/food.png" width="50" />
      <p class="fw-bold fs-5">Go Top</p>
    </div>

    <section id="footer" style="margin-top: 200px">
      <footer class="py-3">
        <div class="py-6 py-md-8 py-xl-10">
          <div class="container">
            <div class="row gy-3">
              <div class="col-12">
                <div class="footer-logo-wrapper text-center">
                  <a href="./">
                    <img
                      src="./assets/images/pawhub-logo-brown.png"
                      alt="BootstrapBrain Logo"
                      width="20%"
                      height="20%"
                    />
                  </a>
                </div>
              </div>
              <div class="col-12">
                <div class="link-wrapper">
                  <ul
                    class="m-0 list-unstyled d-flex justify-content-center gap-3"
                  >
                    <li>
                      <a
                        href="./about-us.html"
                        class="link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-dark link-opacity-75 fs-7"
                      >
                        About Us
                      </a>
                    </li>
                    <li>
                      <a
                        href="./services.html"
                        class="link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-dark link-opacity-75 fs-7"
                      >
                        Services
                      </a>
                    </li>
                    <li>
                      <a
                        href="./gallery.html"
                        class="link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-dark link-opacity-75 fs-7"
                      >
                        Gallery
                      </a>
                    </li>
                    <li>
                      <a
                        href="./contact-us.html"
                        class="link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-dark link-opacity-75 fs-7"
                      >
                        Contact Us
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="container">
            <div class="row gy-3 gy-sm-0 align-items-sm-center">
              <div class="col-sm-6">
                <div
                  class="copyright-wrapper d-block mb-1 fs-9 text-center text-sm-start"
                >
                  &copy; 2024. All Rights Reserved.
                </div>
              </div>
              <div class="col-sm-6">
                <div class="social-media-wrapper">
                  <ul
                    class="m-0 list-unstyled d-flex justify-content-center justify-content-sm-end gap-3"
                  >
                    <li>
                      <a
                        href="https://www.youtube.com/results?search_query=catlover"
                        target="_blank"
                        class="link-opacity-75-hover link-dark"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-youtube"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://id-id.facebook.com/"
                        target="_blank"
                        class="link-opacity-75-hover link-dark"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-facebook"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
    
    <!-- CDN bootstrap 5 -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script type="module" src="./src/scripts/index.js"></script>
  </body>
</html>
