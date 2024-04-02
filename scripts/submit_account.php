<?php
// Step 1: Receive Form Data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Step 2: Validate Data (You can implement your validation logic here)

// Step 3: Connect to the Database
$host = 'localhost';
$dbname = 'users';
$username = 'postgres';
$password = '123456';

try {
    $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

// Step 4: Prepare SQL Statement
$sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";

// Step 5: Execute SQL Statement
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':email', $email);

if ($stmt->execute()) {
    echo "Account created successfully!";
} else {
    echo "Error: Unable to create account.";
}

// Step 6: Handle Errors (You can add more detailed error handling here)

// Step 7: Close Database Connection
$dbh = null;

