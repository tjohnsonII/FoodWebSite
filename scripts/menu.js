document.addEventListener("DOMContentLoaded", function() {
    // Select all quantity input elements
    const quantityInputs = document.querySelectorAll('input[type="number"]');

    // Define variables to store quantities
    let burgerQuantity = 1;
    let chickenSandwichQuantity = 1;
    let friesQuantity = 1;
    let cokeQuantity = 1;
    let shakeQuantity = 1;

    // Function to update quantity variables
    function updateQuantities() {
        burgerQuantity = parseInt(document.getElementById('burger-quantity').value);
        chickenSandwichQuantity = parseInt(document.getElementById('Chicken-Sandwich-quantity').value);
        friesQuantity = parseInt(document.getElementById('fries-quantity').value);
        cokeQuantity = parseInt(document.getElementById('coke-quantity').value);
        shakeQuantity = parseInt(document.getElementById('shake-quantity').value);
    }

    // Event listener to update quantities when input changes
    quantityInputs.forEach(input => {
        input.addEventListener('change', updateQuantities);
    });

    // Initial update of quantities
    updateQuantities();

    // You can use burgerQuantity, chickenSandwichQuantity, friesQuantity, cokeQuantity, shakeQuantity variables as needed.
});
