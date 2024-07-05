<?php

$pageTitle = "Sign Up"; 
include_once("db/header2.php");
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

<body>
<?php
include_once ("db/signup_main.php");
?>
  
<script>
  document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent default form submission

  // 1. Get form values
  const username = document.getElementById('username').value;
  const fullname = document.getElementById('fullname').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const role = document.getElementById('role').value;


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
     <h2><em>Welcome aboard!!</em> </h2>
     <br>

<?php
include_once("db/footer.php");
?>

</body>

</html>


