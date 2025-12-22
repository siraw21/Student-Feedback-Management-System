<?php
include "config/db.php";

$fullname = "System Administrator";
$username = "admin";
$password = "admin123"; // This is the password you will use to login
$role = "admin";

// Generate the hash using your server's current PHP version
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if admin already exists
$check = mysqli_query($conn, "SELECT id FROM users WHERE username = '$username'");

if (mysqli_num_rows($check) > 0) {
    // If exists, update it
    $sql = "UPDATE users SET password = '$hashed_password', fullname = '$fullname', role = '$role' WHERE username = '$username'";
    $action = "updated";
} else {
    // If not, insert it
    $sql = "INSERT INTO users (fullname, username, password, role, college, department) 
            VALUES ('$fullname', '$username', '$hashed_password', '$role', 'WCU', 'Admin Office')";
    $action = "created";
}

if (mysqli_query($conn, $sql)) {
    echo "<h2>Success!</h2>";
    echo "Admin account has been $action.<br>";
    echo "<strong>Username:</strong> $username<br>";
    echo "<strong>Password:</strong> $password<br>";
    echo "<br><a href='backend/login/login.php'>Go to Login Page</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>