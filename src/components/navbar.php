<?php
session_start();

$user = $_SESSION['user'];
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="./" style="cursor: pointer">
      <img src="assets/images/pawhub-logo-brown-2.png" width="240" />
    </a>
    <ul class="navbar-nav gap-3">
      <li class="nav-item">
        <a id="nav-home" role="button" class="nav-link fs-5" href="./">
          Home
        </a>
      </li>
      <li class="nav-item">
        <a
          id="nav-about-us"
          role="button"
          class="nav-link fs-5"
          href="./about-us.html"
        >
          About Us
        </a>
      </li>
      <li class="nav-item">
        <a
          id="nav-services"
          role="button"
          class="nav-link fs-5"
          href="./services.html"
        >
          Services
        </a>
      </li>
      <li class="nav-item">
        <a
          id="nav-gallery"
          role="button"
          class="nav-link fs-5"
          href="./gallery.html"
        >
          Gallery
        </a>
      </li>
      <li class="nav-item">
        <a
          id="nav-contact-us"
          role="button"
          class="nav-link fs-5"
          href="./contact-us.html"
        >
          Contact Us
        </a>
      </li>
      <?php if (isset($_SESSION['user'])): ?>
        <div class="dropdown">
          <button class="btn btn-pawhub-primary dropdown-toggle fs-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $user['name']; ?>
          </button>
          <ul class="dropdown-menu bg-pawhub-primary">
            <li><a class="dropdown-item text-white" href="#"><?php echo $user['name']; ?></a></li>
            <li><a class="dropdown-item text-white" href="#"><?php echo $user['email']; ?></a></li>
            <li><a class="dropdown-item text-white" href="#">Role: User</a></li>
            <li><a class="dropdown-item text-white" href="./logout.php">Logout</a></li>
          </ul>
        </div>
      <?php else: ?>     
        <div class="navbar-nav ps-4">
          <button
            type="button"
            class="btn btn-ghost fs-5"
            data-bs-toggle="modal"
            data-bs-target="#modal-login"
          >
            Login
          </button>
          <button
            type="button"
            class="btn btn-pawhub bg-pawhub-primary text-white fs-5 rounded-5"
            data-bs-toggle="modal"
            data-bs-target="#modal-register"
          >
            Register
          </button>
        </div>
      <?php endif; ?>
    </ul>
  </div>
</nav>

<!-- modal register -->
<div
  class="modal fade"
  id="modal-register"
  tabindex="-1"
  aria-labelledby="registerModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-pawhub-primary p-4 p-md-5 rounded shadow-sm">
      <div class="row">
        <div class="col-12">
          <div class="mb-5">
            <h2 class="h3 text-white">Register</h2>
            <h3 class="fs-6 fw-normal text-white-50 m-0">
              Join us and become part of our community.
            </h3>
          </div>
        </div>
      </div>
      <form action="./register.php" method="post">
        <div class="row gy-3 gy-md-4 overflow-hidden">
          <div class="col-12">
            <label for="name-register" class="form-label text-white"
              >Name</label
            >
            <input
              type="text"
              class="form-control"
              name="name-register"
              id="name-register"
              placeholder="your name"
              required
            />
          </div>
          <div class="col-12">
            <label for="email-register" class="form-label text-white"
              >Email</label
            >
            <input
              type="email"
              class="form-control"
              name="email-register"
              id="email-register"
              placeholder="name@example.com"
              required
            />
          </div>
          <div class="col-12">
            <label for="password-register" class="form-label text-white"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              name="password-register"
              id="password-register"
              placeholder="******"
              value=""
              required
            />
          </div>
          <div class="col-12">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                name="iAgree"
                id="iAgree"
                required
              />
              <label class="form-check-label text-white-50" for="iAgree">
                I agree to the
                <a href="#" class="text-pawhub-secondary text-decoration-none"
                  >terms and conditions</a
                >
              </label>
            </div>
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button class="btn btn-lg btn-dark" type="submit" name="register">
                Register Now
              </button>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-12">
          <hr class="mt-5 mb-4 border-secondary-subtle" />
          <div class="col-12">
            <p class="m-0 text-white-50 text-center">
              Already have an account?
              <span
                class="text-pawhub-secondary text-decoration-none"
                data-bs-toggle="modal"
                data-bs-target="#modal-login"
                style="cursor: pointer"
                >Login</span
              >
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal login -->
<div
  class="modal fade"
  id="modal-login"
  tabindex="-1"
  aria-labelledby="loginModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-pawhub-primary p-4 p-md-5 rounded shadow-sm">
      <div class="row">
        <div class="col-12">
          <div class="mb-5">
            <h2 class="h3 text-white">Login</h2>
            <h3 class="fs-6 fw-normal text-white-50 m-0">
              Log in to access your account.
            </h3>
          </div>
        </div>
      </div>
      <form action="./login.php" method="post">
        <div class="row gy-3 gy-md-4 overflow-hidden">
          <div class="col-12">
            <label for="email-login" class="form-label text-white">Email</label>
            <input
              type="email"
              class="form-control"
              name="email-login"
              id="email-login"
              placeholder="name@example.com"
              required
            />
          </div>
          <div class="col-12">
            <label for="password-login" class="form-label text-white"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              name="password-login"
              id="password-login"
              placeholder="******"
              value=""
              required
            />
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button class="btn btn-lg btn-dark" type="submit" name="login">
                Login
              </button>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-12">
          <hr class="mt-5 mb-4 border-secondary-subtle" />
          <div class="col-12">
            <p class="m-0 text-white-50 text-center">
              don't have an account yet?
              <span
                class="text-pawhub-secondary text-decoration-none"
                data-bs-toggle="modal"
                data-bs-target="#modal-register"
                style="cursor: pointer"
                >Register now</span
              >
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>