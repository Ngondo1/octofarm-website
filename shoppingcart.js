
class ShoppingCart {
  constructor() {
      // ... (your existing element references) ...
      this.cartItemsElement = document.getElementById("cart-items");
        this.orderSummaryElement = document.getElementById("orderSummary");
        this.totalPriceElement = document.getElementById("totalPrice");
        this.refreshButton = document.getElementById("refreshButton");
        this.checkoutButton = document.getElementById("checkoutButton");


      this.total = 0;
      this.refreshButton.addEventListener("click", this.refreshCart.bind(this));
      this.checkoutButton.addEventListener("click", this.proceedToCheckout.bind(this));

      this.updateCartDisplay();
  }

  getOrderDataFromStorage() {
      const orderDataString = localStorage.getItem('orderData');
      return orderDataString ? JSON.parse(orderDataString) : []; // Return empty array if no data
  }

  updateCartDisplay() {
      const orderData = this.getOrderDataFromStorage();
      this.total = 0;
      this.cartItemsElement.innerHTML = ''; 
      this.orderSummaryElement.innerHTML = ''; 

      if (orderData.length > 0) {
          orderData.forEach(item => {
              // ... (your existing item display logic) ...
              const itemElement = document.createElement("div");
              itemElement.classList.add("cart-item");
              itemElement.innerHTML = `
                  <img class="item-image" src="https://via.placeholder.com/80" alt="${item.name}">
                  <div class="item-details">
                      <h3>${item.name}</h3>
                      <p>Quantity: ${item.quantity}</p>
                      <p>Price: Ksh ${item.price.toFixed(2)}</p>
                  </div>
              `;             
              this.total += item.price;
              // Calculate item total price
              const itemTotal = item.price * item.quantity;
              this.total == itemTotal; // Update the total price

              // Display item total price in the cart and order summary
              itemElement.innerHTML == `<p>Item Total: Ksh ${itemTotal.toFixed(2)}</p>`;
              this.cartItemsElement.appendChild(itemElement);
              this.orderSummaryElement.appendChild(itemElement.cloneNode(true));
          });
      } else {
          this.cartItemsElement.innerHTML = "<p>Your cart is empty.</p>";
          this.orderSummaryElement.innerHTML = "<p>Your cart is empty.</p>";
      }

      this.totalPriceElement.textContent = `Total: Ksh ${this.total.toFixed(2)}`;
  }

  refreshCart() {
      localStorage.removeItem('orderData');
      this.updateCartDisplay();
  }

  proceedToCheckout() {
      if (this.total > 0) {
          alert("Paybill:522533  AccNo:7738381  Total: Ksh " + this.total.toFixed(2) );
          // ... (Your actual checkout logic here) ...
      } else {
          alert("Your cart is empty. Please add items before proceeding to checkout.");
      }
  }
}

new ShoppingCart();




      