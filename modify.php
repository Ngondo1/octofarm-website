<?php
include_once("db/header2.php");
?>

<?php
require_once("includes/dbconnection.php"); 
?>


<?php
// Check if the ID parameter is provided
if(isset($_GET['id'])) {
    $username = $_GET['id'];

    // Fetch the user data
    $sql = "SELECT * FROM Onlineusers WHERE Username = ?"; 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
?>
        // Display the form pre-filled with the user's data
        
        <form action="view_messages.php" method="post"> 
            <input type="hidden" name="username" value="<?php echo htmlspecialchars($row['Username']); ?>">

            <label for="Username">User Name:</label>
            <input type="text" id="Username" name="Username" value="<?php echo htmlspecialchars($row['Username']); ?>"><br><br>

            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($row['Fullname']); ?>"><br><br>

            <label for="email_address">Email:</label>
            <input type="email" id="email_address" name="email" value="<?php echo htmlspecialchars($row['Email']); ?>"><br><br>

            <label for="Password">Password:</label><br>
            <input type="password" id="Password" name="password" value="" autocomplete="off"><br><br>

            <label for="role">role:</label>
            <input type="text" id="role" name="role">
            <option value="client" <?php if ($row['role'] == 'client') echo 'selected'; ?>>Client</option>
            <option value="worker" <?php if ($row['role'] == 'worker') echo 'selected'; ?>>Worker</option>
            <option value="administrator" <?php if ($row['role'] == 'administrator') echo 'selected'; ?>>Administrator</option>
            <option value="manager" <?php if ($row['role'] == 'manager') echo 'selected'; ?>>Manager</option>
            <option value="shareholder" <?php if ($row['role'] == 'shareholder') echo 'selected'; ?>>Shareholder</option>
            </select><br><br>


            <input type="submit" value="Update">
        </form>
        <style>
            /* Form Container */
form {
  width: 400px; /* Adjust width as needed */
  margin: 20px auto; /* Center the form */
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 8px; /* Add rounded corners */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Labels */
label {
  display: block; /* Place labels above inputs */
  margin-bottom: 5px;
  font-weight: bold;
}

/* Input Fields and Textareas */
input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%; /* Make inputs full width */
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box; /* Include padding and border in element's total width and height */
  margin-bottom: 15px;
}

/* Submit Button */
input[type="submit"] {
  background-color: #007bff; /* Blue background */
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer; /* Indicate it's clickable */
}

input[type="submit"]:hover {
  background-color: #0056b3; /* Darker blue on hover */
}
        </style>

<?php        
    } else {
        echo "User not found.";
    }

    $stmt->close();
}

$conn->close();
?>

<?php
include_once("db/footer.php");
?>
