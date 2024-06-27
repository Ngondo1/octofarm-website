<?php
require_once("includes/dbconnection.php"); 

// Check if the ID parameter is provided
if(isset($_GET['id'])) {
    $username = $_GET['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM Onlineusers WHERE Username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
        // Redirect back to the list of users or another page
        header("Location: view_messages.php"); 
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "User not found.";
}

$conn->close();
