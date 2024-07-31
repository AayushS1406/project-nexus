<?php
// Configuration
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'QuickBite';

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to retrieve user data
$query = "SELECT * FROM `users` WHERE username = '$username'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    $hashed_password = $user_data['password'];

    // Verify password
    if (password_verify($password, $hashed_password)) {
        // Login successful, start session
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to dashboard
        header('Location: homepage.php');
        exit;
    } else {
        // Invalid password
        $error_message = 'Invalid password';
    }
} else {
    // User not found
    $error_message = 'User not found';
}

// Close connection
$conn->close();

// Display error message if any
if (isset($error_message)) {
    echo '<script>alert("'. $error_message. '");</script>';
    echo '<script>window.location.href = "index.php";</script>';
}
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div style="text-align:center; padding:15%;" >
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>