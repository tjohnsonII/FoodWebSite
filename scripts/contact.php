<?php
// PostgreSQL database credentials
$host = 'localhost';
$port = '5432';
$dbname = 'users';
$user = 'tim2';
$password = '123456';

// Connect to PostgreSQL database
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
try {
    $pdo = new PDO($dsn);
} catch (PDOException $e) {
    die("Error: Could not connect to the database: " . $e->getMessage());
}

// Update query
$username = 'tim2';
$password = '123456';
$sql = "UPDATE users SET password = :password WHERE username = :username";

// Prepare and execute the query
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

if ($stmt->execute()) {
    echo "User record updated successfully.";
} else {
    echo "Error updating user record.";
}
?>
