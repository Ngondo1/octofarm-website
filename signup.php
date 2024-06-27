<?php
require_once("includes/dbconnection.php"); 
 
// Check if delete button was clicked
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM OnlineUsers WHERE id = $id";

    if ($conn->query($delete_query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
 
// Check if modify button was clicked
if (isset($_GET['modify'])) {
    $id = $_GET['modify'];
    // Fetch user data for pre-filling the form
    $select_query = "SELECT * FROM OnlineUsers WHERE id = ?";
    $result = $conn->query($select_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Store the fetched data in variables for the form
        $existingUsername = $row['username'];
        $existingFullname = $row['full_name'];
        $existingEmail = $row['email'];
        // (Don't fetch the password for security)
    } else {
        echo "User not found";
    }
}

// Check if the form was submitted for modification
if (isset($_POST['modify_user'])) {
    $id = $_POST['id']; // Get the ID from the hidden field
    $newUsername = $_POST['username'];
    $newFullname = $_POST['fullname'];
    $newEmail = $_POST['email_address'];

    // Sanitize input data (VERY IMPORTANT)
    // ... (same as in your original code)

    $update_query = "UPDATE OnlineUsers SET username = '$newUsername', full_name = '$newFullname', email = '$newEmail' WHERE id = $id";
    
    if ($conn->query($update_query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch all users for display
$select_all_query = "SELECT * FROM OnlineUsers";
$result = $conn->query($select_all_query);


    


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Octofarm - Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZenhVNpHmPQ0oW9RJr67hE3zYLvFSkl7+uW**,YfT7H9PKlfz4+mW8C2zWJlW" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><strong><em>Go live! </em></strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav flex-column ms-auto"> 
            <li class="nav-item">
             <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Baked Goods</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  
</head>

<body>

  <div class="container py-5">
    <h1 class="text-center mb-4">Go live!</h1>
    <br>
    <h2>Welcome to Octofarm! To unlock exclusive benefits and a more personalized experience, create a new account today.</h2>




    <section class="form-section">
    <form action="view_messages.php" method="post" id="registrationForm">

  <div class="mb-3">
    <label for="username" class="form-label">Username: </label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  
  <div class="mb-3">
    <label for="fullname" class="form-label">Full Name: </label>
    <input type="text" class="form-control" id="fullname" name="fullname" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email Address: </label>
    <input type="email" class="form-control" id="email" name="email_address" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password:  </label>
    <input type="password" class="form-control" id="password" name="Password" required minlength="8">
  </div>

  <button type="submit" class="btn btn-primary" name="send_message">Submit </button>
</form>



<script>
  document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent default form submission

  // 1. Get form values
  const username = document.getElementById('username').value;
  const fullname = document.getElementById('fullname').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // 2. Basic validation (you can add more rigorous checks)
  let isValid = true; // Assume form is valid initially

  if (username.length < 5) {
    alert('Username must be at least 5 characters long.');
    isValid = false;
  }

  if (fullname.length < 3) {
    alert('Full name must be at least 3 characters long.');
    isValid = false;
  }

  if (!validateEmail(email)) { // Call a separate email validation function
    alert('Please enter a valid email address.');
    isValid = false;
  }

  if (password.length < 8) {
    alert('Password must be at least 8 characters long.');
    isValid = false;
  }

  // 3. Submit the form if it's valid
  if (isValid) {
    event.preventDefault();
    this.action = "view_messages.php"; 
    this.submit(); // Submit the form (this refers to the form element)
    // Or, if you prefer the redirect:
     window.location.href = 'view.php';
  }
});

// Email validation function (example - you can use a more robust one)
function validateEmail(email) {
  // Basic email pattern check
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}
});

</script>
    </section>
  </div>
       <h2>Welcome aboard!! </h2>

       <footer class="container-fluid bg-light py-3 text-center">
        <p>&copy; Octofarm Limited 2024</p>
        <p>Contact us: <a href="mailto:Octofarmenterprises@gmail.com">info@Octofarmenterprises@gmail.com</a></p>
        <p>&copy; Cream and Crumble 2024</p>
        
        <script src="time.js" defer></script>
    <p id="localTime"></p>
      </footer>

</body>

</html>


