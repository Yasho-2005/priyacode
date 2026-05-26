<?php
// Turn on error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

// Include database connection
include 'includes/db.php';

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    // Basic validation
    if (empty($name) || empty($email) || empty($phone)) {
        die("Please fill all fields.");
    }

    // Check if user already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // Existing user: login
        $_SESSION['user'] = $result->fetch_assoc();
        header("Location: exams.php");
        exit();
    } else {
        // New user: insert into DB
        $insert = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
        $insert->bind_param("sss", $name, $email, $phone);
        if ($insert->execute()) {
            $_SESSION['user'] = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone
            ];
            header("Location: exams.php");
            exit();
        } else {
            die("Database insert error: " . $insert->error);
        }
    }
} else {
    die("Invalid request.");
}
?>
