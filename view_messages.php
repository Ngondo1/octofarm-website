<?php
$pageTitle = "Home"; 
include_once("db/header.php");
?>


<?php
require_once("includes/dbconnection.php"); 



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $email = filter_var($_POST["email_address"], FILTER_SANITIZE_EMAIL); // Sanitize email
    $password = password_hash($_POST["Password"], PASSWORD_DEFAULT); // Hash password
  // Retrieve and sanitize form data
    $username = htmlspecialchars($_POST["username"]);
    $fullname = htmlspecialchars($_POST["fullname"]);
    $email = filter_var($_POST["email_address"], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST["Password"], PASSWORD_DEFAULT); // Hash the password

    // Insert data into the database (using prepared statements)
    $insertStmt = $conn->prepare("INSERT INTO OnlineUsers (Username, Fullname, Email, password) VALUES (?, ?, ?, ?)");
    $insertStmt->bind_param("ssss", $username, $fullname, $email, $password);

    if ($insertStmt->execute()) {
        // Success: Redirect or display a message
        header("Location: view_messages.php");
        exit(); 
    } else {
        // Error handling
        echo "Error inserting data: " . $insertStmt->error;
    }

    $insertStmt->close();
}

// Prepare the statement for selecting user data
$selectStmt = $conn->prepare("SELECT Username, Fullname, Email, LastUpdated FROM OnlineUsers");

// Execute the select statement
$selectStmt->execute();
$result = $selectStmt->get_result();


// 3. Display (with HTML Encoding and Optional Styling)
if ($result->num_rows > 0) {
    echo "<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        </style>";

    echo "<h2>Online Users</h2>";
    echo "<table>";
    echo "<tr><th>Username</th><th>Full Name</th><th>Email</th><th>Last Updated</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["Username"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Fullname"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Email"]) . "</td>";
    
        // Do NOT display the password in plain text
        echo "<td>********</td>"; // Or leave the cell empty
    
        // Format LastUpdated with exact seconds
        echo "<td>" . date("Y-m-d H:i:s", strtotime($row["LastUpdated"])) . "</td>";
    
        // Actions (Modify and Delete)
        echo "<td>";
    
        // Use a unique identifier (e.g., 'id') instead of the username if you have one
        echo "<a href='modify.php?id=" . htmlspecialchars($row["Username"]) . "'>Modify</a> | ";
        echo "<a href='delete.php?id=" . htmlspecialchars($row["Username"]) . "' onclick='return confirm(\"Are you sure you want to delete?\");'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    

    echo "</table>";
} else {
    echo "<p>No online users found.</p>";
}

// 4. Close Resources
$selectStmt->close();
$conn->close();
?>
