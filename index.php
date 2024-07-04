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
              <img
                src="assets/images/paws/paw-1.jpg"
                class="card-img-top"
                height="280"
                style="cursor: pointer"
                alt="paw"
              />
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
                        >Rp. 249.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-secondary"
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
                      style="width: 89%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 10 July 2024</small
                  >
                  <button
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                  >
                    Donate
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <img
                src="assets/images/paws/paw-2.jpg"
                class="card-img-top"
                height="280"
                style="cursor: pointer"
                alt="paw"
              />
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
                        >Rp. 249.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-secondary"
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
                      style="width: 89%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 10 July 2024</small
                  >
                  <button
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                  >
                    Donate
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <img
                src="assets/images/paws/paw-3.jpg"
                class="card-img-top"
                height="280"
                style="cursor: pointer"
                alt="paw"
              />
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
                      <span class="fw-bold text-pawhub-secondary"
                        >Rp. 249.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-secondary"
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
                      style="width: 89%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 10 July 2024</small
                  >
                  <button
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                  >
                    Donate
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <img
                src="assets/images/paws/paw-4.jpg"
                class="card-img-top"
                height="280"
                style="cursor: pointer"
                alt="paw"
              />
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
                      <span class="fw-bold text-pawhub-secondary"
                        >Rp. 249.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-secondary"
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
                      style="width: 89%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 10 July 2024</small
                  >
                  <button
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                  >
                    Donate
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <img
                src="assets/images/paws/paw-5.jpg"
                class="card-img-top"
                height="280"
                style="cursor: pointer"
                alt="paw"
              />
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
                      <span class="fw-bold text-pawhub-secondary"
                        >Rp. 249.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-secondary"
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
                      style="width: 89%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 10 July 2024</small
                  >
                  <button
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                  >
                    Donate
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-animation" style="border: 0; border: 0">
              <img
                src="assets/images/paws/paw-6.jpg"
                class="card-img-top"
                height="280"
                style="cursor: pointer"
                alt="paw"
              />
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
                      <span class="fw-bold text-pawhub-secondary"
                        >Rp. 249.000</span
                      >
                    </p>
                    <p class="my-auto">
                      needed
                      <span class="fw-bold text-pawhub-secondary"
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
                      style="width: 89%; background-color: #584d51"
                    ></div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <small class="text-body-secondary"
                    >End date 10 July 2024</small
                  >
                  <button
                    class="btn btn-pawhub bg-pawhub-primary text-white rounded-5"
                  >
                    Donate
                  </button>
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
    <!-- CDN bootstrap 5 -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script type="module" src="./src/scripts/index.js"></script>
  </body>
</html>