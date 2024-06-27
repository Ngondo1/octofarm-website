<?php
$pageTitle = "Home"; 
include_once("db/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users page - Octofarm: Exquisite Baked Goods from East Africa</title>
  <meta name="description" content="Discover the story of Octofarm, a bakery passionate about creating exquisite baked goods with the finest ingredients and traditional techniques. Learn about our commitment to quality and our exciting expansion plans.">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  >
</head>

<body>


  <main class="container py-5">
    <section >
      <div class="row">
        <div class="col-md-6 order-md-2">        
          <img src="THE STREET CHILD.jpg" alt="Our team at Octofarm" class="img-fluid">
          <br><br>
          <img src="the packaging.jpg" alt="Our team at Octofarm" class="img-fluid">
          </div>
          <div class="col-md-6 order-md-1">
          <div >
          <h2>Our Mission</h2>
          <p><em>Understanding the needs of our customers in order to  consistently add value to their life.</em></p>
          <br><br>
          <h2>Our Vision</h2>
          <p><em>A lasting legacy as a bakery that cares deeply about the health and happiness of society.</em></p>

             <br><br>
          <h2>Our values</h2>
          <p>Quality: Upholding the highest standards of quality in every aspect of our business, from sourcing the finest ingredients to crafting each treat with meticulous care.
            <br>
            Innovation: Continuous innovation, exploring new flavors, techniques, and ingredients to create unique and exciting treats that surprise and delight our customers.
            <br>
            Nourishment: using wholesome, natural ingredients that nourish the body and contribute to overall well-being.
          </p>
          
         
          </div>
          </div>
      </div>
    </section>

  </main>

  <footer class="container-fluid bg-dark text-light py-3 text-center">
    <p>&copy; Octofarm 2024</p>
    <p>Contact us: <a href="mailto:Octofarmenterprises@gmail.com">info@Octofarmenterprises@gmail.com</a></p>
    <p>&copy; Cream and Crumble 2024</p>
    <script src="time.js" defer></script>
    <p id="localTime"></p>
    <br><br>
    <a href="signup.html" class="btn btn-primary mt-3">Click here to sign up!</a>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Smooth Scrolling for Internal Links (Optional)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>





</script>
</body>
</html>
