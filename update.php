<?php
// ... (your database connection)
require_once("includes/dbconnection.php"); 
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data (e.g., using htmlspecialchars)
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];

    // Update the data in the database 
    $sql = "UPDATE Onlineusers SET Fullname = ?, Email = ? WHERE Username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullname, $email, $username);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
// ... (redirect or other actions after update)
if ($stmt->execute()) {
    echo "Record updated successfully";

    // Redirect to the user list page (adjust the path as needed)
    header("Location: view_messages.php"); 
    exit(); // Important to stop further execution after redirection
}

$conn->close();
