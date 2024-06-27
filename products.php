<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshly Baked Products - Octofarm: East Africa's bakers heart</title>
    <meta name="description" content="Discover Octofarm's delicious range of freshly baked goods, including cake slices, sweet mandazi, and more, all crafted with the finest ingredients.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="shoppingcart.js" defer></script>
    
    
</head>

<body>
   
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><strong><em>Octofarm - East Africa's Baker's Heart</em></strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
<ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="products.html">Baked Goods</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                        <li class="nav-item">
                            <a class="nav-link cart-icon" href="#">
                                <button id="cart-button" onclick="window.location.href='checkout.html'">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span id="cart-count">0</span>
                                  </button>
                            </a>
                        </li>
                    </ul>
                    <div class="container">
                        <form class="d-flex mt-3" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <div class="mt-3">
                          <label for="minPrice">Min Price:</label>
                          <input type="number" id="minPrice" class="form-control" value="0">
                          <label for="maxPrice">Max Price:</label>
                          <input type="number" id="maxPrice" class="form-control" value="1000">
                        </div>
                      </div>
                      
        </nav>
    </header>

    <main class="container">
        <section>
        <section class="products container ">
            <h2>Welcome to Cream and Crumble!</h2>
            <br><br>
            <p class="lead text-muted"><strong>Indulge in our delectable treats, crafted with the finest ingredients and a <em>dash of love.</em></strong></p>
            <br><br>
            
            
            
            <div class="product-item">
            <div class="col">
                <div class="card shadow border-primary">
                    <img src="pexels-abhinavcoca-291528.jpg" class="card-img-top img-fluid" alt="Cake Slices">
                    <div class="card-body">
                        <h2 class="card-title"><em>Cake Slices</em></h2>
                        <p class="text-muted">Enjoy our delightful cake slices, perfect for a sweet snack!<br><br> Vacuum-sealed to maintain freshness for up to 20 days.</p>
            
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="minus-cake">-</button>
                            <input type="number" class="form-control text-center" value="1" min="1" id="quantity-cake">
                            <button class="btn btn-outline-secondary" type="button" id="plus-cake">+</button>
                        </div>
            
                        <p class="text-muted">Price: Ksh <span id="price-cake">70</span></p> 
                        <button id="demo1" class="btn btn-primary mt-3" onclick="window.location.href='checkout.html'">Order now!</button> 
                    </div>
                </div>
             </div><br><br><br><br>
            </div>
        
        <br><br><br><br>

            
        
             <div class="product-item">
             <div class="col">
                <div class="card shadow border-primary">
                    <img src="https://imgur.com/gallery/sweet-mandazi-YcsB4Qh" class="card-img-top img-fluid" alt="Sweet Mandazi image">
                    <div class="card-body">
                        <h2 class="card-title"><em>Sweet Mandazi</em></h2>
                        <p class="text-muted">Enjoy our delightful 180g mandazi, perfect for a sweet snack!<br><br> Vacuum-sealed to maintain freshness for up to 20 days.</p><br>
            
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="minus-mandazi">-</button>
                            <input type="number" class="form-control text-center" value="1" min="1" id="quantity-mandazi">
                            <button class="btn btn-outline-secondary" type="button" id="plus-mandazi">+</button>
                        </div>
            
                        <p class="text-muted">Price: Ksh <span id="price-mandazi">60</span></p> 
                        <button id="demo2" class="btn btn-primary mt-3" onclick="window.location.href='checkout.html'">Order now!</button>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>
        
        <br><br><br><br>

            

        
            <div class="product-item">
            <div class="col">
                <div class="card shadow border-primary">
                    <img src="pexels-castorlystock-3650436.jpg" class="card-img-top img-fluid" alt="plain/chocolate Muffins image">
                    <div class="card-body">
                        <h2 class="card-title"><em>Muffins</em></h2>
                        <p class="text-muted">Enjoy our delightful Muffins, perfect for a sweet snack!<br><br> A nutritious snack for tea break.</p><br>
                        <h3>Choose between chocolate and vanilla flavoring.</h3>

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="minus-muffins">-</button>
                            <input type="number" class="form-control text-center" value="1" min="1" id="quantity-muffins">
                            <button class="btn btn-outline-secondary" type="button" id="plus-muffins">+</button>
                        </div>
            
                        <p class="text-muted">Price: Ksh <span id="price-muffins">50</span></p> 
                        <button id="demo3" class="btn btn-primary mt-3" onclick="window.location.href='checkout.html'">Order now!</button>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>
        
        <br><br><br><br>

              
            
            <div class="product-item">
            <div class="col">
                <div class="card shadow border-primary">
                    <img src="pexels-darkou-10563880.jpg" class="card-img-top img-fluid" alt="queencakes image">
                    <div class="card-body">
                        <h2 class="card-title"><em>Queencakes</em></h2>
                        <p class="text-muted">Enjoy our delightful Queencakes, perfect for a sweet snack!<br><br> A nutritious snack for tea break.<br><br> For customer convinience, they are available in a packets of six!</p>
            
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="minus-queencakes">-</button>
                            <input type="number" class="form-control text-center" value="1" min="1" id="quantity-queencakes">
                            <button class="btn btn-outline-secondary" type="button" id="plus-queencakes">+</button>
                        </div>
            
                        <p class="text-muted">Price: Ksh <span id="price-queencakes">100</span></p> 
                        <button id="demo4" class="btn btn-primary mt-3" onclick="window.location.href='checkout.html'">Order now!</button>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>
        
        <br><br><br><br>


            
           
            <div class="product-item">
            <div class="col">
                <div class="card shadow border-primary">
                    <img src="pexels-fotios-photos-230325.jpg" class="card-img-top img-fluid" alt="cookies image">
                    <div class="card-body">
                        <h2 class="card-title"><em>Cookies</em></h2>
                        <p class="text-muted">Enjoy our delightful Cookies, perfect for a sweet snack!<br><br> A nutritious snack for tea break.<br><br> For customer convinience, they are available in a packets of 10!</p>
                        <br><h3>Choose between vanilla and coconut flavoring.</h3>
                        <p class="text-muted">Price: Ksh <span id="price-cookies">300</span></p> 

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="minus-cookies">-</button>
                            <input type="number" class="form-control text-center" value="1" min="1" id="quantity-cookies">
                            <button class="btn btn-outline-secondary" type="button" id="plus-cookies">+</button>
                            <input type="number" class="form-control text-center" value="1" min="1" id="increment-amount"> <label for="increment-amount">Increment:</label>
                            <select id="increment-amount">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                            </select>
                        
                        </div>
                        <button id="demo5" class="btn btn-primary mt-3" onclick="window.location.href='checkout.html'">Order now!</button>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>
        
        <br><br><br><br>
              
              
        </section>
        </section>
    </main>

    <script>
     const searchInput = document.querySelector('.form-control');
const searchButton = document.querySelector('.btn-outline-success');
const productItems = document.querySelectorAll('.product-item');
const minPriceInput = document.getElementById('minPrice');
const maxPriceInput = document.getElementById('maxPrice');

searchInput.addEventListener('keyup', filterProducts);
searchButton.addEventListener('click', filterProducts);
minPriceInput.addEventListener('input', filterProducts);
maxPriceInput.addEventListener('input', filterProducts);

function filterProducts() {
  const searchTerm = searchInput.value.toLowerCase();
  const minPrice = parseFloat(minPriceInput.value) || 0;
  const maxPrice = parseFloat(maxPriceInput.value) || Infinity;

  let matchFound = false; // Track if any items match

  productItems.forEach(item => {
    const productName = item.querySelector('.card-title').textContent.toLowerCase();
    const productDescription = item.querySelector('.card-text').textContent.toLowerCase();
    const productPrice = parseFloat(item.querySelector('p:last-of-type span').textContent); // Get price from the last <p> tag's <span>
    const isMuffinsCard = productName.includes('muffins');
    const isCookiesCard = productName.includes('cookies');

    let flavorMatch = false;
    if (isCookiesCard) {
      const cookieFlavors = item.querySelector('h3').textContent.toLowerCase();
      flavorMatch = cookieFlavors.includes('vanilla') || cookieFlavors.includes('coconut');
    } else if (isMuffinsCard) {
      flavorMatch = productDescription.includes('chocolate') || productDescription.includes('vanilla');
    }

    const isMatch = (
      productName.includes(searchTerm) || 
      productDescription.includes(searchTerm) || 
      flavorMatch
    ) && (
      productPrice >= minPrice && productPrice <= maxPrice
    );

    if (isMatch) {
      matchFound = true; // A match was found, so update the flag
      item.style.display = 'block'; // Show the item if it matches
    } else {
      item.style.display = 'none'; // Hide the item if it doesn't match
    }
  });

  // After looping through all items, if no match was found, show all items again
  if (!matchFound) {
    productItems.forEach(item => {
      item.style.display = 'block'; 
    });
  }
}
    </script>


    
    <script>
        document.getElementById("demo1").addEventListener("click", function() {
    updateOrder("Cake Slices", 70); // Pass product name and price
});
document.getElementById("demo2").addEventListener("click", function() {
    updateOrder("Sweet Mandazi", 60);
});
document.getElementById("demo3").addEventListener("click", function() {
    updateOrder("Muffins", 50);
});

document.getElementById("demo4").addEventListener("click", function() {
    updateOrder("queencakes", 100);
});

document.getElementById("demo5").addEventListener("click", function() {
    updateOrder("cookies", 300);
});

document.getElementById("plus-cake").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-cake", "price-cake", 70, true);
});

document.getElementById("minus-cake").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-cake", "price-cake", 70, false);
});

document.getElementById("plus-mandazi").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-mandazi", "price-mandazi", 60, true); 
});

document.getElementById("minus-mandazi").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-mandazi", "price-mandazi", 60, false);
});

document.getElementById("plus-muffins").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-muffins", "price-muffins", 50, true); 
});

document.getElementById("minus-muffins").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-muffins", "price-muffins", 50, false);
});

document.getElementById("plus-queencakes").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-queencakes", "price-queencakes", 100, true); 
});

document.getElementById("minus-queencakes").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-queencakes", "price-queencakes", 100, false);
});

document.getElementById("plus-cookies").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-cookies", "price-cookies", 300, true); 
});

document.getElementById("minus-cookies").addEventListener("click", function() {
    updateQuantityAndPrice("quantity-cookies", "price-cookies", 300, false);
});


function updateQuantityAndPrice(quantityId, priceId, basePrice, increment) {
    const quantityInput = document.getElementById(quantityId);
    const priceSpan = document.getElementById(priceId);
    const incrementInput = document.getElementById("increment-amount"); // Get increment amount
    let quantity = parseInt(quantityInput.value, 10);
    const incrementAmount = parseInt(incrementInput.value, 10) || 1; // Default to 1

    if (isNaN(quantity) || quantity < 1) {
        quantity = 1; 
        alert("Invalid quantity. Please enter a positive number."); 
    } else if (increment) {
        quantity += incrementAmount; // Add the increment amount
    } else if (quantity > 1) {
        quantity = Math.max(1, quantity - incrementAmount); // Subtract, ensuring it doesn't go below 1
    }

    quantityInput.value = quantity;
    priceSpan.textContent = (quantity * basePrice).toFixed(2);
}


function updateOrder(productName, basePrice) {
    const quantityInputId = `quantity-${productName.toLowerCase().replace(/ /g, "-")}`;
    const quantityInput = document.getElementById(quantityInputId);

    // Ensure the quantity input element exists before accessing its value
    if (!quantityInput) {
        console.error(`Quantity input not found for ${productName}`);
        return; 
    }

    const quantity = parseInt(quantityInput.value, 10) || 1; // Default to 1 if parsing fails

    let orderData = JSON.parse(localStorage.getItem("orderData")) || [];

    const existingProductIndex = orderData.findIndex(item => item.name === productName);

    if (existingProductIndex !== -1) {
        orderData[existingProductIndex].quantity = quantity; 
        orderData[existingProductIndex].price = basePrice * quantity; 
    } else {
        const product = {
            name: productName,
            quantity: quantity,
            price: basePrice * quantity 
        };
        orderData.push(product);
    }

    localStorage.setItem("orderData", JSON.stringify(orderData));

    // Optional: Redirect or provide feedback (only redirect here)
    window.location.href = "checkout.html";  
}

</script>


   
    <footer class="container-fluid bg-dark text-light py-3 text-center">
        <p>&copy; Octofarm Limited 2024</p>
        <p>Contact us: <a href="mailto:Octofarmenterprises@gmail.com">info@Octofarmenterprises@gmail.com</a></p>
        <p>&copy; Cream and Crumble 2024</p>
        <script src="time.js" defer></script>
    <p id="localTime"></p>
    </footer>
    <button onclick="window.print()">Print this page</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



    <script>
        // Sample cart functionality - replace with your actual implementation
        const cartIcon = document.querySelector('.cart-icon');
        const cartCount = document.getElementById('cart-count');
        let cartItems = 0; // Start with 0 items in the cart

        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', () => {
                cartItems++;
                cartCount.textContent = cartItems;
                // You would typically update your backend here as well
            });
        });
 
    </script>


    <script>
document.getElementById("demo1").addEventListener("click", function() {
    updateOrder("Cake Slices", 70); 
});

document.getElementById("demo2").addEventListener("click", function() {
    updateOrder("Sweet Mandazi", 60);
});

document.getElementById("demo3").addEventListener("click", function() {
    updateOrder("Muffins", 50);
});

document.getElementById("demo4").addEventListener("click", function() {
    updateOrder("queencakes", 100);
});

document.getElementById("demo5").addEventListener("click", function() {
    updateOrder("cookies", 300);
});

function updateOrder(productName, productPrice) {
    let orderData = JSON.parse(localStorage.getItem("orderData")) || [];

    // Check if the product already exists in the order
    const existingProductIndex = orderData.findIndex(item => item.name === productName);

    if (existingProductIndex !== -1) {
        // Product exists, increment quantity
        orderData[existingProductIndex].quantity++;
        orderData[existingProductIndex].price = productPrice * orderData[existingProductIndex].quantity
    } else {
        // Product doesn't exist, add it with quantity 1
        const product = {
            name: productName,
            quantity: 1,
            price: productPrice
        };
        orderData.push(product);
    }

    // Store updated order data
    localStorage.setItem("orderData", JSON.stringify(orderData));

    // Optional: Redirect or provide feedback
    // window.location.href = "checkout.html";
}
</script>

<script>
    
  function openCart() {
  // 1. Get cart count
  function openCart() {
  // 1. Get product name and quantity
  const productName = event.target.closest('.product-item').querySelector('.card-title').textContent;
  const quantityInput = event.target.closest('.product-item').querySelector('input[type="number"]');
  const quantity = parseInt(quantityInput.value) || 1; // Default to 1 if input is invalid

  // 2. Get existing cart items from local storage
  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || {};

  // 3. Add or update the item in the cart
  if (cartItems[productName]) {
    cartItems[productName] += quantity;
  } else {
    cartItems[productName] = quantity;
  }

  // 4. Store updated cart items in local storage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));

  // 5. Update cart count display
  updateCartCount();

  // 6. (Optional) You can redirect to the checkout page or display a cart summary here.
  // ... your logic here
}
function updateCartCount() {
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || {};
  let totalCount = 0;
  for (const product in cartItems) {
    totalCount += cartItems[product];
  }
  document.getElementById('cart-count').textContent = totalCount;
}
  }

</script>
</body>
</html>
