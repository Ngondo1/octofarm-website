<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users page - Octofarm: Exquisite Baked Goods from East Africa</title>
  <meta name="description" content="Discover the story of Octofarm, a bakery passionate about creating exquisite baked goods with the finest ingredients and traditional techniques. Learn about our commitment to quality and our exciting expansion plans.">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">  
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="index.html"><strong><em>Octofarm- Users page</em></strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="about.html">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="products.html">Purchase </a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                </ul>
            </div>
          </div>
        </nav>
      </header>
      
      <section class="about-us container py-5">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <img src="images/bakery-hero.jpg" alt="Our team at Octofarm" class="img-fluid">
          </div>
          <div class="col-md-6 order-md-1">
            <section class="history container mt-5">
                <h2>Welcome to East Africa's Baker's Heart- Cream n Crumble</h2>
                <a href="products.html" class="btn btn-primary mt-3">Try our services!</a><br>
                <div class="row">
                  <div class="col-md-6 order-md-2">
                    <img src="images/bakery-banner.jpg" alt="Bakers at work in Octofarm" class="img-fluid">
                  </div>
                  <div class="col-md-6 order-md-1"> 
                    <p>Octofarm is more than just a bakery; it's the culmination of a lifelong passion for baking.
                      <br>
                       Our founders, with hearts brimming with flour and minds overflowing with creative ideas, dreamt of creating a bakery unlike any other. After years of honing their craft and securing the resources to make their vision a reality, Octofarm was born. 
                      <br><br>
                      We are dedicated to using the finest ingredients, traditional techniques, and a touch of innovation to bring you the most delicious and delightful baked goods imaginable.</p>
                    <br>
                    <a href="products.html" class="btn btn-primary mt-3">Explore Our Delights</a>
                    <br> 
                    <h3 class="mt-4">Our Expansion Plans</h3>
                    <p>The future is bright for Octofarm! We're excited to announce our plans to bring our delectable treats to even more corners of Nairobi and beyond. 
                      <br><br>
                      Our first expansion will be an exciting new outlet in Githurai, followed by additional locations strategically placed throughout Nairobi and Kiambu. We can't wait to share the Octofarm experience with a wider audience and become a staple in your neighborhood.</p>
                    <a href="contact.html" class="btn btn-primary mt-3">Click here and contact us</a>
                    <h3 class="mt-4">Introducing Cream and Crumble</h3>
                    <p>It's about offering exceptional baked goods under a brand you can trust. 
                      
          
           
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
                <a href="signup.html" class="btn btn-primary mt-3">Click here to sign up</a>
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
            </body>
            </html>
            
    
</body>
</html>