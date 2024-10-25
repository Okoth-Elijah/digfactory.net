<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register</title>
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

  .register-form {
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

  .register-logo {
    width: 14em;
  }

  .login-link {
    text-decoration: none;
  }

  </style>
</head>

<body>
  <section class="register">
    <div class="register-content d-flex justify-content-center">
      <form action="" class="register-form px-3 py-3 rounded text-secondary">
        <div class="d-flex justify-content-center">
          <img src="images/new-images/dig-logo.png" alt="logo" class="register-logo mb-2  img-fluid">
        </div>
          <h5 class="register-title text-secondary mb-3 ">Please Sign Up</h5>
        <div class="form-group mb-3 ">
          <label for="fullname">Full Name</label>
          <input type="text" class="form-control rounded bg-light" id="fullname" name="fullname"
            placeholder="Enter fullname" required>
        </div>
        <div class="mb-3">
          <label for="email-address">Email Address</label>
          <input type="email" class="form-control rounded bg-light" id="email-address" name="email-address"
            placeholder="Enter email-address" required>
        </div>
        <div class="form-group mb-3">
          <label for="Password">Password</label>
          <input type="Password" class="form-control rounded bg-light" id="Password" name="Password" required>
        </div>
        <button class="btn btn-primary w-100 btn-lg">Sign in</button>
        <div class="register-link d-flex flex-column mt-2 justify-content-center">
            <div class="d-flex align-items-center justify-content-center">
                <p class="me-2 my-auto">Already Active Student?</p>
                <a href="login.php"class="my-auto login-link" >Login here </a>
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