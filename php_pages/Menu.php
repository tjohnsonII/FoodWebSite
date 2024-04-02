<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Burger Restaurant</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar">
    <div class="container">
        <h1 class="logo">Burger Joint</h1>
        <ul class="nav-links">
            <li><a href="../php_pages/index.php">Home</a></li>
            <li><a href="../php_pages/Menu.php">Menu</a></li>
            <li><a href="../php_pages/about.php">About</a></li>
            <li><a href="../php_pages/contact.php">Contact</a></li>
            <li><a href="../php_pages/create_account.php">Create Account</a></li>
        </ul>
    </div>
</nav>

<!-- Menu Section -->
<section class="menu-section">
    <section id="burger">
        <div class="container">
            <h2>Juicy Burgers!</h2>
                <div class="item">
                    <img src="../images/burger.jpeg" alt="Burger">
                    <p>Our classic beef burger served with lettuce, tomato, and pickles.</p>
                    <div class="quantity">
                        <label for="burger-quantity">Quantity:</label>
                        <div class="quantity-input">
                            <button type="button" class="decrement">-</button>
                            <input type="number" id="burger-quantity" name="burger-quantity" min="1" value="1">
                            <button type="button" class="increment">+</button>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="chicken-sandwich">
        <div class="container">
            <h2>Crispy Chicken Sandwich!</h2>
                <div class="item">
                    <img src="../images/chickenSandwich.jpeg" alt="Chicken Sandwich">
                    <h3>Chicken Sandwich</h3>
                    <p>Grilled chicken breast served on a bun with mayo, lettuce, and tomato.</p>
                    <label for="Chicken-Sandwich-quantity">Quantity:</label>
                    <div class="quantity">
                        <button class="decrement-btn">-</button>
                        <input type="number" id="Chicken-Sandwich-quantity" name="Chicken-Sandwich-quantity" min="1" value="1">
                        <button class="increment-btn">+</button>
                    </div>
                </div>
                <!-- Other menu items -->
        </div>
    </section>

    <section id="fries">
        <div class="container">
            <h2>Hot Crispy Fries!</h2>
                <div class="item">
                    <img src="../images/fries.jpeg" alt="Fries">
                    <h3>Fries</h3>
                    <p>Crispy golden fries seasoned with salt.</p>
                    <label for="fries-quantity">Quantity:</label>
                    <div class="quantity">
                        <button class="decrement-btn">-</button>
                        <input type="number" id="fries-quantity" name="fries-quantity" min="1" value="1">
                        <button class="increment-btn">+</button>
                    </div>
                </div>
        </div>
    </section>

    <section id="coke">
        <div class="container">
            <h2>Ice Cold Cola</h2>
                <div class="item">
                    <img src="../images/coke.jpeg" alt="Coke">
                    <h3>Coke</h3>
                    <p>Refreshing Coca-Cola served ice cold.</p>
                    <label for="coke-quantity">Quantity:</label>
                    <div class="quantity">
                        <button class="decrement-btn">-</button>
                        <input type="number" id="coke-quantity" name="coke-quantity" min="1" value="1">
                        <button class="increment-btn">+</button>
                    </div>
                </div>
        </div>
    </section>


    <section id="shake">
        <div class="container">
            <h2>Delicious Milk Shakes!</h2>
                <div class="item">
                    <img src="../images/shake.jpeg" alt="Shake">
                    <h3>Shake</h3>
                    <p>Rich and creamy milkshake available in chocolate, vanilla, and strawberry flavors.</p>
                    <label for="shake-quantity">Quantity:</label>
                    <div class="quantity">
                        <button class="decrement-btn">-</button>
                        <input type="number" id="shake-quantity" name="shake-quantity" min="1" value="1">
                        <button class="increment-btn">+</button>
                    </div>
                </div>
        </div>
    </section>


    <!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Burger Restaurant. All rights reserved.</p>
    </div>
</footer>

<script src="../scripts/menu.js"></script>

</body>
</html>
