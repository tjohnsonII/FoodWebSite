<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>

</head>
<body>
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
