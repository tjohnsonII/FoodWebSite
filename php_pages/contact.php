<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Burger Restaurant</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar">
    <div class="container">
        <h1 class="logo">Burger Restaurant</h1>
        <ul class="nav-links">
            <li><a href="../php_pages/index.php">Home</a></li>
            <li><a href="../php_pages/Menu.php">Menu</a></li>
            <li><a href="../php_pages/about.php">About</a></li>
            <li><a href="../php_pages/contact.php">Contact</a></li>
            <li><a href="../php_pages/create_account.php">Create Account</a></li>
        </ul>
    </div>
</nav>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have a question or feedback? We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>

        <img src="../images/contactUsFace.jpeg" alt="Contact Us" class="contact-img">

        <form action="../scripts/submit_account.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Burger Restaurant. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
