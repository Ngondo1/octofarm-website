<!DOCTYPE html>
<html>
<head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  $(document).ready(function() {
    var currentUrl = window.location.href;
    $('.nav-link').each(function() {
      if ($(this).attr('href') == currentUrl) {
        $(this).addClass('active');
      }
    });
  });
  </script>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Discover Octofarm, your source for delicious and high-end baked goods in East Africa. We offer a wide range of products, from birthday cakes to sweet mandazi, crafted with passion and quality ingredients.">
<meta name="keywords" content="Octofarm, bakery, East Africa, baked goods, cakes, mandazi, pastries, desserts, Githurai">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <title><?php 
        // Dynamic page title based on a variable set in each page
        if (isset($pageTitle)) {
            echo $pageTitle; 
        } else {
            echo "Octofarm"; // Default title if $pageTitle isn't set
        }
    ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
       
    <link rel="stylesheet" href="db/header.css">
    <link rel="stylesheet" href="style.css"> 


</head>
<div>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            
                
                <nav class="nav">
                    <li><a class="nav-link" href="index.php">Home</a></li>
                    <li><a class="nav-link" href="products.php">Purchase</a></li>
                    <li><a class="nav-link" href="about.php">About Us</a></li>
                    <li><a class="nav-link" href="signin.php">Log in</a></li>
                    <li><a class="nav-link" href="signup.php">Register</a></li>
                    <li><a class="nav-link" href="view_messages.php">View_Database</a></li>
                    
                    
                </nav>
            
        </nav>
    </header>
<h1><strong><em>Welcome to Octofarm:<br> Karibu sana!!<br>Sroll down :)</em></strong></h1>
<br>

    <style>
        /* Overall Header Styling */
header {
    background-color: #f8f9fa; /* Light background color */
    padding: 1.5rem 0;            /* Increased padding */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* More prominent shadow */
}

/* Navigation Bar Styling */
.navbar {
    justify-content: space-between;
    background-color: #fff; /* White background for the navbar itself */
    border-radius: 5px;       /* Rounded corners */
    padding: 1rem 1.5rem;     /* More padding within the navbar */
}

/* Navigation Links Styling */
.nav {
    list-style: none; /* Remove default list styling */
    padding: 0;        /* Remove default padding */
    margin: 0;         /* Remove default margin */
}

.nav-link {
    color: #343a40;          /* Dark text color */
    font-weight: 500;        /* Slightly bolder text */
    padding: 0.5rem 1rem;   /* More padding around links */
    border-radius: 3px;      /* Slightly rounded corners for links */
    transition: all 0.3s ease; /* Transition for background and color */
}

.nav-link:hover {
    background-color: #e9ecef; /* Light gray background on hover */
    color: #007bff;          /* Change text color to Bootstrap blue on hover */
}

/* Active Link Styling */
.nav-link.active {
    background-color: #007bff; /* Bootstrap blue for the active link */
    color: #fff;              /* White text color for active link */
}

/* Logo Styling (optional) */
.navbar-brand {
    font-weight: bold;
    font-size: 1.5rem;  /* Larger logo font size */
}

/* Media Query for Smaller Screens */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column; 
        align-items: center;
    }
    .nav-link {
        margin: 8px 0;      /* More spacing for vertical links */
        width: 100%;       /* Make links full width on small screens */
        text-align: center; /* Center text within links */
    }
}
            /* Animation for Slide Down */
            header {
            transform: translateY(-100%); /* Start off-screen */
            opacity: 0;
            transition: transform 1s ease, opacity 1s ease; /* Smooth transition */
        }

        header.show { 
            transform: translateY(0);  
            opacity: 1;
        }

        /* Style for images to create the illusion of sliding downwards as you scroll */
        .image-gallery {
            opacity: 0; /* Initially hidden */
            transform: translateY(50px); /* Start a bit below the original position */
            transition: opacity 1s ease, transform 1s ease;
        }

        .image-gallery.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // ... your existing nav active link code ...

            // Slide down animation for header and images on scroll
            $(window).scroll(function() {
                const scrollPosition = $(this).scrollTop();
                const headerHeight = $('header').outerHeight();
                const images = $('.image-gallery');

                // Show header after scrolling past it
                if (scrollPosition > headerHeight) {
                    $('header').addClass('show');
                }

                // Fade in each image as it comes into view
                images.each(function() {
                    const imageTop = $(this).offset().top;
                    const windowHeight = $(window).height();

                    if (scrollPosition + windowHeight > imageTop) {
                        $(this).addClass('show');
                    }
                });
            });
        });
    </script>
    <img class="image-gallery" src="header.jpg" alt="LOGO">
    <br><br>                                                                                                                            
    

    
      
 
    </style>
    
    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
