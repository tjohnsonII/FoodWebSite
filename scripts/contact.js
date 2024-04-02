// Get the form element
const form = document.querySelector('form');

// Add submit event listener to the form
form.addEventListener('submit', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the form data
    const formData = new FormData(form);

    // Perform form validation
    if (!validateFormData(formData)) {
        return;
    }

    // Prepare the data to be sent
    const requestData = {
        name: formData.get('name'),
        email: formData.get('email'),
        message: formData.get('message')
    };

    // Example: Send the form data to the server using fetch API
    fetch(form.action, {
        method: 'POST',
        body: JSON.stringify(requestData),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Handle the response from the server
            console.log('Form submission successful:', data);
            alert('Thank you! Your message has been sent.');
            // Optionally, reset the form
            form.reset();
        })
        .catch(error => {
            // Handle errors
            console.error('There was a problem with your fetch operation:', error);
            alert('Oops! Something went wrong. Please try again later.');
        });
});

// Function to validate form data
function validateFormData(formData) {
    const name = formData.get('name');
    const email = formData.get('email');
    const message = formData.get('message');

    // Simple validation example (you can extend this as needed)
    if (!name || !email || !message) {
        alert('Please fill in all fields.');
        return false;
    }

    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    return true;
}
