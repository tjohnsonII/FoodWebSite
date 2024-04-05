<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="../styles/receipt.css">
</head>

<body>
    <header>
        <h1>Welcome to Burger Joint</h1>
    </header>

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


    <div class="receipt">
        <h1>Receipt</h1>
        <?php
        // Check if total price is set in the URL
        if (isset($_GET['total'])) {
            $totalPrice = floatval($_GET['total']);
            echo "<p>Total Price: $totalPrice</p>";
        } else {
            echo "<p>Error: Total price is not set.</p>";
        }
        ?>
    </div>
</body>

</html>
