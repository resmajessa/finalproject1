<?php
// Start session
session_start();

// Check if CAPTCHA is correct and not empty
if (isset($_POST['captcha']) && !empty($_POST['captcha'])) {
    // Establish connection to MySQL database
    $conn = new mysqli("localhost", "root", "", "jewel");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data from the database based on the provided username
    $sql = "SELECT id, name, password FROM rigestration WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, start session and store user data
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $row['name'];

            // Check if CAPTCHA is correct
            if ($_POST['captcha'] == $_SESSION['captcha']) {
                // Redirect to ShopNow.html
                header("Location: ShopNow.html");
                exit;
            } else {
                // CAPTCHA verification failed
                echo "CAPTCHA verification failed";
            }
        } else {
            // Password is incorrect
            echo "Invalid password";
        }
    } else {
        // User not found
        echo "User not found";
    }

    $conn->close();
} else {
    // CAPTCHA is empty or not set
    echo "CAPTCHA verification failed";
}
?>
