<?php
session_start();
include 'includes/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Existing user - login
    $_SESSION['user'] = mysqli_fetch_assoc($result);
    header("Location: exams.php");
} else {
    // New user - insert into DB
    $insert = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if (mysqli_query($conn, $insert)) {
        $_SESSION['user'] = ['name' => $name, 'email' => $email, 'phone' => $phone];
        header("Location: exams.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
