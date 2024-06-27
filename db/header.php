<!DOCTYPE html>
<html>
<head>
    <title><?php 
        // Dynamic page title based on a variable set in each page
        if (isset($pageTitle)) {
            echo $pageTitle; 
        } else {
            echo "Octofarm"; // Default title if $pageTitle isn't set
        }
    ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="header.css">  
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container py-3">
                <h1><strong><em>Welcome to Octofarm: Contact us here</em></strong></h1>

                <nav class="nav justify-content-end">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="products.php">Purchase</a>
                    <a class="nav-link" href="about.php">About Us</a>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="signin.php">Sign In</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li> 
                        </ul>
                    </li>
                </nav>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
