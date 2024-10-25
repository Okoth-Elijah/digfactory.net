<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
  body {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.1);
  }

  .login-form {
    border: 2px solid rgba(128, 128, 128, 0.3);
    background-color: whitesmoke;
    width: 22em;

    input {
      height: 2.5em;
      border: 2px solid rgba(128, 128, 128, 0.4);
      overflow: none;
      outline: hidden;
    }


    input::placeholder {
      opacity: 0.3;
      font-size: 15px;
    }
  }

  .login-logo {
    width: 14em;
  }

  .register-link {
    text-decoration: none;
  }
  </style>
</head>

<body>
  <section class="login">
    <div class="login-content d-flex justify-content-center">
      <form action="" class="login-form px-3 py-3 rounded text-secondary">
        <div class="d-flex justify-content-center">
          <img src="images/new-images/dig-logo.png" alt="logo" class="login-logo mb-2  img-fluid">
        </div>

        <h5 class="login-title text-secondary mb-3 ">Please sign in</h5>
        <div class="form-group mb-3 ">
          <label for="Email-address">Email address</label>
          <input type="email" class="form-control rounded bg-light" id="Email-address" name="Email-address"
            placeholder="Enter email address" required>
        </div>
        <div class="form-group mb-3">
          <label for="Password">Password</label>
          <input type="Password" class="form-control rounded bg-light" id="Password" name="Password" required>
        </div>
        <div class="form-group mb-3  d-flex align-items-center">
          <input class="me-2" type="checkbox" id="rememberMe" />
          <label for="rememberMe">Rember me</label>
        </div>
        <button class="btn btn-primary w-100 btn-lg">Sign in</button>
        <div class="register-link d-flex mt-2 justify-content-center">
          <p class="me-2" >New Student?</p>
          <a href="register.php" class="register-link">Register Here</a>
        </div>

        <p class="text-center mt-3">&copy; 2018 - 2024</p>
      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>