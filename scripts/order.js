document.addEventListener("DOMContentLoaded", function() {
    // Select all quantity input elements
    const quantityInputs = document.querySelectorAll('input[type="number"]');

    // Define variables to store quantities
    let burgerQuantity = 0;
    let chickenSandwichQuantity = 0;
    let friesQuantity = 0;
    let cokeQuantity = 0;
    let shakeQuantity = 0;

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

    // Fetch prices from JSON file
    fetch('../json/menu.json')
        .then(response => response.json())
        .then(data => {
            const { burger, chicken_sandwich, fries, coke, shake } = data;

            // Event listener for the order button
            const orderButton = document.querySelector('.order_button');
            orderButton.addEventListener('click', function() {
                // Calculate total price based on quantities and prices
                const totalPrice = (burgerQuantity * burger) + (chickenSandwichQuantity * chicken_sandwich) + (friesQuantity * fries) + (cokeQuantity * coke) + (shakeQuantity * shake);

                // Redirect to the receipt page with total price
                window.location.href = `receipt.php?total=${totalPrice}`;
            });
        })
        .catch(error => {
            console.error('Error fetching prices:', error);
        });
});
