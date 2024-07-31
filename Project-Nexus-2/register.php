<?php
// Start a session
session_start();

// Database connection settings
$host = 'localhost'; // Change this to your database host if necessary
$dbname = 'QuickBite';
$username = 'root'; // Your database username
$password = ''; // Your database password

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values and sanitize
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password-1']);

    // Validate inputs
    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: register.php");
        exit();
    }

    // Check for valid email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: register.php");
        exit();
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement to insert user data
    try {
        $stmt = $pdo->prepare("INSERT INTO `users` (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        
        if ($stmt->execute()) {
            $_SESSION['success'] = "Registration successful! You can now log in.";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Registration failed. Please try again.";
            header("Location: index.php");
            exit();
           
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header("Location: index.php");

        exit();
    }

    
}
?>

