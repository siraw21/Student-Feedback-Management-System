<?php
// include "../../config/db.php";
// session_start();
// $un = mysqli_real_escape_string($conn, $_POST['username']);
// $pw = $_POST['password'];

// $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$un'");
// if ($u = mysqli_fetch_assoc($res)) {
//     if (password_verify($pw, $u['password'])) {
//         $_SESSION['user_id'] = $u['id'];
//         $_SESSION['role'] = $u['role'];
//         $_SESSION['fullname'] = $u['fullname'];
//         header("Location: ../dashboard/" . ($u['role']=='admin' ? 'adminDash.php' : 'studentDash.php'));
//         exit;
//     }
// }
// echo "Invalid login.";
?>


<?php
include "../../config/db.php";
session_start();

$un = mysqli_real_escape_string($conn, $_POST['username']);
$pw = $_POST['password'];

$res = mysqli_query($conn, "SELECT * FROM users WHERE username='$un'");

if ($u = mysqli_fetch_assoc($res)) {
    if (password_verify($pw, $u['password'])) {
        $_SESSION['user_id'] = $u['id'];
        $_SESSION['role'] = $u['role'];
        $_SESSION['fullname'] = $u['fullname'];
        
        header("Location: ../dashboard/" . ($u['role']=='admin' ? 'adminDash.php' : 'studentDash.php'));
        exit;
    }
}

// If we reach here, login failed
$_SESSION['error'] = "Invalid username or password. Please try again.";
header("Location: login.php");
exit;
?>