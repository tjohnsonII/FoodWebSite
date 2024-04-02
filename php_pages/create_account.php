<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="../styles/create_account_style.css">
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

<div class="container">
    <form action="../scripts/submit_account.php" method="POST">
        <h2>Create Account</h2>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Create Account</button>
    </form>
</div>
</body>
</html>
