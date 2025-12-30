<?php
    include "../../config/db.php";
    session_start();

    $userName = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$userName'");

    if ($userData = mysqli_fetch_assoc($result)) {
        if (password_verify($pass, $userData['password'])) {
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['role'] = $userData['role'];
            $_SESSION['fullname'] = $userData['fullname'];
            
            header("Location: ../dashboard/" . ($userData['role']=='admin' ? 'adminDash.php' : 'studentDash.php'));
            exit;
        }
    }


    $_SESSION['error'] = "Invalid username or password. Please try again.";
    header("Location: login.php");
    exit;
?>