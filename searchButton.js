const searchInput = document.querySelector('.form-control');
const searchButton = document.querySelector('.btn-outline-success');
const productItems = document.querySelectorAll('.product-item');
const incrementAmountSelect = document.getElementById("increment-amount"); // Moved outside

searchInput.addEventListener('keyup', filterProducts);
searchButton.addEventListener('click', filterProducts);

function filterProducts() {
  const searchTerm = searchInput.value.toLowerCase(); 

  productItems.forEach(item => {
    const productName = item.querySelector('.card-title').textContent.toLowerCase();
    const productDescription = item.querySelector('.card-text').textContent.toLowerCase();
    const muffinFlavors = item.querySelectorAll('.muffin-flavor'); // Select muffin flavors

    let flavorMatch = false; 
    if (muffinFlavors.length > 0) {
      muffinFlavors.forEach(flavor => {
        if (flavor.textContent.toLowerCase().includes(searchTerm)) {
          flavorMatch = true;
        }
      });
    }

    if (productName.includes(searchTerm) || productDescription.includes(searchTerm) || flavorMatch) {
      item.style.display = 'block'; 
    } else {
      item.style.display = 'none';  
    }
  });
}

productItems.forEach(item => {
  const minusButton = item.querySelector('.btn-outline-secondary:first-child');
  const plusButton = item.querySelector('.btn-outline-secondary:last-child');
  const quantityInput = item.querySelector('.form-control');

  minusButton.addEventListener('click', () => changeQuantity(quantityInput, -1));
  plusButton.addEventListener('click', () => changeQuantity(quantityInput, 1));
});

function changeQuantity(input, change) {
  let currentQuantity = parseInt(input.value);
  const incrementAmount = parseInt(incrementAmountSelect.value); 
  currentQuantity += change * incrementAmount;
  input.value = Math.max(1, currentQuantity); 
}