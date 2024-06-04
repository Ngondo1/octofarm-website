<?php
// Database connection (replace with your credentials)
$servername = "your_servername"; // Usually "localhost"
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample query to fetch products (replace with your actual query)
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octofarm Bakery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        </nav>

    <div class="container">
        <div id="home" class="jumbotron">
            </div>

        <div id="products" class="mt-5">
            <h2>Our Delicious Treats</h2>
            <div class="row">
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row["image_url"] . '" class="card-img-top" alt="' . $row["product_name"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["product_name"] . '</h5>';
                    echo '<p class="card-text">' . $row["description"] . '</p>';
                    echo '<p class="card-text">Ksh ' . $row["price"] . '</p>'; // Assuming price is in Kenyan Shillings (Ksh)
                    echo '<a href="#purchase" class="btn btn-primary">Order Now</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-3" id="footer">
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script> 
</body>
</html>
