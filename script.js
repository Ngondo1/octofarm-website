document.getElementById("demo").addEventListener("click", function() {
    // 1. Get Existing Order Data (or create an empty array)
    let orderData = JSON.parse(localStorage.getItem("orderData")) || [];
  
    // 2. Get Product Details (You'll need to fill this in)
    const product = {
      name: "Cake Slices", // Replace with actual product name
      quantity: 1,          // Get quantity from your form or input
      price: 69.99          // Replace with actual product price
    };
  
    // 3. Add Product to Order Data
    orderData.push(product);
  
    // 4. Store Updated Order Data
    localStorage.setItem("orderData", JSON.stringify(orderData));
  
    // 5. Redirect to Checkout (Optional)
    window.location.href = "checkout.html"; 
  });
  


