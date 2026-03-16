
const UNIT_PRICE = 200;
const quantityInput = document.getElementById('quantity');
const totalDisplay = document.getElementById('totalPrice');
quantityInput.addEventListener('input', function() {
    let quantity = parseInt(quantityInput.value);
    
    if (quantity < 0 || isNaN(quantity)) {
        quantity = 0;
        quantityInput.value = 0; 
    }
    const total = UNIT_PRICE * quantity;
    totalDisplay.value = total;
    if (total > 1000) {
        alert("Congratulations! You are now eligible for a gift coupon.");
    }
});