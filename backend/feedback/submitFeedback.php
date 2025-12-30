
<?php
require_once '../../config/auth.php';
require_once '../../config/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_SESSION['user_id'];
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $target = mysqli_real_escape_string($conn, $_POST['target_name']); 
    $comment = mysqli_real_escape_string($conn, $_POST['comments']);

    // Capture all 10 questions
    $q1 = $_POST['q1'] ?? '';
    $q2 = $_POST['q2'] ?? '';
    $q3 = $_POST['q3'] ?? '';
    $q4 = $_POST['q4'] ?? '';
    $q5 = $_POST['q5'] ?? '';
    $q6 = $_POST['q6'] ?? '';
    $q7 = $_POST['q7'] ?? '';
    $q8 = $_POST['q8'] ?? '';
    $q9 = $_POST['q9'] ?? '';
    $q10 = $_POST['q10'] ?? '';

    $sql = "INSERT INTO feedback (user_id, category, target_name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, comments) 
            VALUES ('$userID', '$category', '$target', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$comment')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../dashboard/studentDash.php?status=success");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>