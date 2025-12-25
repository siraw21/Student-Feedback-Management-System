<?php
include "../../config/db.php"; session_start();
$uid = $_SESSION['user_id']; 
$cat = $_POST['category']; 
$comm = $_POST['comments'];
$sql = "INSERT INTO feedback (user_id, category, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, comments) 
        VALUES ('$uid', '$cat', '{$_POST['q1']}', '{$_POST['q2']}', '{$_POST['q3']}', '{$_POST['q4']}', '{$_POST['q5']}', '{$_POST['q6']}', '{$_POST['q7']}', '{$_POST['q8']}', '{$_POST['q9']}', '{$_POST['q10']}', '$comm')";
mysqli_query($conn, $sql);
header("Location: ../dashboard/studentDash.php");
?>