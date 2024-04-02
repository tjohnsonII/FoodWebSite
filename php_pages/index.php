<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Restaurant</title>
    <link rel="stylesheet" href="../styles/style.css">
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

    <main>
        <section class="menu">
            <h2>Menu</h2>
            <div class="item">
                <a href="../php_pages/Menu.php#burger">
                    <img src="../images/burger.jpeg" alt="Burger">
                    <h3>Burger</h3>
                    <p>Delicious burger with juicy patty, lettuce, cheese, and sauce.</p>
                </a>
            </div>
            <div class="item">
                <a href="../php_pages/Menu.php#chicken-sandwich">
                    <img src="../images/chickenSandwich.jpeg" alt="Chicken Sandwich">
                    <h3>Chicken Sandwich</h3>
                    <p>Grilled chicken breast sandwich with fresh lettuce and mayo.</p>
                </a>
            </div>
            <div class="item">
                <a href="../php_pages/Menu.php#fries">
                    <img src="../images/fries.jpeg" alt="Fries">
                    <h3>Fries</h3>
                    <p>Golden crispy fries served hot and fresh.</p>
                </a>
            </div>
            <div class="item">
                <a href="../php_pages/Menu.php#coke">
                    <img src="../images/coke.jpeg" alt="Coke">
                    <h3>Coke</h3>
                    <p>Refreshing carbonated drink to quench your thirst.</p>
                </a>
            </div>
            <div class="item">
                <a href="../php_pages/Menu.php#shake">
                    <img src="../images/shake.jpeg" alt="Shake">
                    <h3>Shake</h3>
                    <p>Creamy and delicious milkshake in various flavors.</p>
                </a>
            </div>
        </section>
    </main>


    <footer>
        <p>&copy; 2024 Burger Restaurant. All rights reserved.</p>
    </footer>

    <script src="../scripts/clientRequest.js"></script>
</body>
</html>
 
