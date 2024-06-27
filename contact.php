<?php
   require_once("includes/dbconnection.php");
   //include_once("templates/heading.php");
   //include_once("templates/nav.php");

   if(isset($_POST["send_message"])){
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $email_address = $_POST["email_address"];
    $Password = $_POST["Password"];
    

   // Sanitize input data (VERY IMPORTANT)
   $username = mysqli_real_escape_string($conn, $username);
   $fullname = mysqli_real_escape_string($conn, $fullname);
   $email_address = mysqli_real_escape_string($conn, $email_address);
   $Password = mysqli_real_escape_string($conn, $Password);

   // Hash the password (VERY IMPORTANT)
   $hashedPassword = password_hash($Password, PASSWORD_DEFAULT); 

   $insert_message = "INSERT INTO users (username, full_name, email, password) 
                      VALUES ('$username', '$fullname', '$email_address', '$hashedPassword')"; 

    if($conn->query($sql) === TRUE) {
      echo "New record created successfully";    
    }else{
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
   }

?>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><strong><em>Contact us - Octofarm: East Africa's bakers heart </em></strong></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-ZenhVNpHmPQ0oW9RJr67hE3zYLvFSkl7+uW**,YfT7H9PKlfz4+mW8C2zWJlW" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container py-3">
      <h1><strong><em>Welcome to Octofarm: Contact us here</em></strong></h1>
      <nav class="nav justify-content-end">
        <a class="nav-link" href="index.html">Home</a>
        <a class="nav-link" href="products.html">Purchase</a>
        <a class="nav-link" href="about.html">About Us</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="signin.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
       
        </li>
      </nav>
    </div>
  </header>

  <main class="container mt-5">
    <section class="contact p-5 rounded shadow bg-light">
      <h2>Get in Touch</h2>
      <p class="lead">We value your feedback! Your voice helps us improve and ensure we continue delivering the best baked goods in town.</p>

      <div class="row">
        <div class="col-md-6 mb-3">
          <p class="text-muted">Feel free to reach out to us through any of the following methods:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Phone: +254 768620877 or +254 722734129</li>
            <li class="list-group-item">Email: octofarm@gmail.com</li>
            <li class="list-group-item">Address: Kikuyu, Kiambu, Kenya</li>
          </ul>
        </div>

        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Your Name:</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address:</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message:</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </section>
  </main>
  <script>
    const form = document.getElementById('contact-form');
    
    form.addEventListener('submit', function(event) {
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;
    
      if (name === '' || email === '' || message === '') {
        alert('Please fill in all required fields!');
        event.preventDefault(); // Prevent form submission
      }
    });
    </script>
    
  <footer class="container-fluid bg-dark text-light py-3 text-center">
    <p>&copy; Octofarm 2024</p>
    <p>Contact us: <a href="mailto:Octofarmenterprises@gmail.com">info@Octofarmenterprises@gmail.com</a></p>
    <p>&copy; Cream and Crumble 2024</p>
    <script src="time.js" defer></script>
    <p id="localTime"></p>
  </footer>
</body>

</html>
