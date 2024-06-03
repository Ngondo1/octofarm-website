<script>
function handleButtonClick() {
 alert("Thanks for Ordering! You're one step closer.");
 // You could optionally add code here to change the paragraph content
document.getElementById("demo").innerHTML = "Order under process.";
}
</script>


const orderButton = document.getElementById("demo");
orderButton.addEventListener("click", handleButtonClick);


 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"

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