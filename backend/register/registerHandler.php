<?php
include "../../config/db.php";
session_start();

$fullName = mysqli_real_escape_string($conn, $_POST['fullname']); 
$studentId = mysqli_real_escape_string($conn, $_POST['student_id']);
$college = mysqli_real_escape_string($conn, $_POST['college']); 
$dept = mysqli_real_escape_string($conn, $_POST['dept']);
$userName = mysqli_real_escape_string($conn, $_POST['username']); 
$firstPass = $_POST['password'];
$secondPass = $_POST['confirm_password'];

// Backend Validation
if (strlen($firstPass) < 6) {
    $_SESSION['reg_error'] = "Password must be at least 6 characters!";
    header("Location: register.php");
    exit();
}

if ($firstPass !== $secondPass) {
    $_SESSION['reg_error'] = "Passwords did not match!";
    header("Location: register.php");
    exit();
}


$pw_hashed = password_hash($firstPass, PASSWORD_DEFAULT);

$checkQuery = "SELECT * FROM users WHERE username='$userName' OR student_id_no='$studentId'";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    $_SESSION['reg_error'] = "Username or Student ID already registered!";
    header("Location: register.php");
    exit();
}

$sql = "INSERT INTO users (fullname, student_id_no, college, department, username, password, role) 
        VALUES ('$fullName', '$studentId', '$college', '$dept', '$userName', '$pw_hashed', 'student')";

if(mysqli_query($conn, $sql)) {
    $_SESSION['reg_success'] = "Account created successfully!";
    header("Location: ../login/login.php");
    exit();
}
?>

