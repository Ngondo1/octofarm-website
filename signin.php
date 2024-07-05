<?php
$pageTitle = "Octofarm - Sign In";
include_once("db/header2.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <script src="loginvalidation.js" defer></script>
</head>

<body>

  <div class="container py-5">
    <h1 class="text-center mb-4">Pick up where you left</h1>
    <p>Thank you for choosing Octofarm! Please enter your email and password to sign in.</p>

    <form action="process_signin.php" method="post" class="row">

      <div class="col-md-6 mb-3">
        <label for="email" class="form-label">Email Address:</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
        <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
      </div>

      <div class="col-md-6 mb-3">
        <label for="password" class="form-label">Password:</label>
        <div class="input-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
          <button class="btn btn-outline-secondary" type="button" id="password-toggle">
            <span class="fas fa-eye-slash" aria-hidden="true"></span>
          </button>
        </div>
        <small id="passwordHelp" class="form-text text-muted">
          <ul>
            <li>Password must be at least 8 characters long.</li>
            <li>Include a mix of uppercase and lowercase letters, numbers, and symbols.</li>
          </ul>
        </small>
      </div>

      <div class="col-12 d-flex justify-content-between">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='UsersPage.html'">Sign In</button>

        <a href="signup.html" class="text-muted">Don't have an account? Sign Up</a>
      </div>
    </form>
  </div>

  <?php
include_once("db/footer.php");
?>
  <script src="https://kit.fontawesome.com/your-fontawesome-kit-code.js" crossorigin="anonymous"></script>
  

</body>

</html>
