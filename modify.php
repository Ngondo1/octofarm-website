<?php
require_once("includes/dbconnection.php"); 




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

        // Display the form pre-filled with the user's data
        ?>
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


            <input type="submit" value="Update">
        </form>

        <?php
    } else {
        echo "User not found.";
    }

    $stmt->close();
}

$conn->close();
?>
