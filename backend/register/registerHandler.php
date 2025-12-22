<?php
include "../../config/db.php";
$fn = $_POST['fullname']; $sid = $_POST['student_id'];
$cl = $_POST['college']; $dp = $_POST['dept'];
$un = $_POST['username']; $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (fullname, student_id_no, college, department, username, password, role) 
        VALUES ('$fn', '$sid', '$cl', '$dp', '$un', '$pw', 'student')";
mysqli_query($conn, $sql);
header("Location: ../login/login.php");
?>