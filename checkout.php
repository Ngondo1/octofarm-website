<!DOCTYPE html>
<html>
<head>

  <script src="shoppingcart.js" defer></script>
  <style>
    /* Basic Styling (Customize as needed) */
    .cart-item {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ccc;
        padding: 15px;
    }

    .item-image {
        width: 80px;
        margin-right: 15px;
    }

    .item-details {
        flex-grow: 1;
    }
</style>
    </head>

<body>
<?php
$pageTitle = "Checkout - Cream and Crumble";
include_once("db/header2.php")
?>

      <main class="container mt-5">
        <section class="hero"> 
          <div class="container"> 
            <div class="hero-content">    
        <br><br>
        <h1>Shopping Cart</h1>
        <button id="refreshButton" class="btn btn-secondary mb-3">Refresh Cart</button>
        <a class="btn btn-primary" href="products.html">Add more products! </a>
        <div id="cart-items" class="row">
            </div>

        <h2>Order Summary</h2>
        <div id="orderSummary" class="mt-3">
            </div>

        <div class="text-center mt-4">
            <h3 id="totalPrice">Total: Ksh 0.00</h3>   <button id="checkoutButton" class="btn btn-primary" onclick="">Proceed to Complete purchase</button>
        </div>
    </div>
    </div>
    </section>
    </main>
    <br><br>

<?php
include_once("db/footer.php")
?>

    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
