<?php
// include "../../config/db.php";
// $fn = $_POST['fullname']; $sid = $_POST['student_id'];
// $cl = $_POST['college']; $dp = $_POST['dept'];
// $un = $_POST['username']; $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (fullname, student_id_no, college, department, username, password, role) 
//         VALUES ('$fn', '$sid', '$cl', '$dp', '$un', '$pw', 'student')";
// mysqli_query($conn, $sql);
// header("Location: ../login/login.php");
?>

<?php
include "../../config/db.php";

// Capture the form data using your existing variable names
$fn = mysqli_real_escape_string($conn, $_POST['fullname']); 
$sid = mysqli_real_escape_string($conn, $_POST['student_id']);
$cl = mysqli_real_escape_string($conn, $_POST['college']); 
$dp = mysqli_real_escape_string($conn, $_POST['dept']);
$un = mysqli_real_escape_string($conn, $_POST['username']); 
$pw = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Your existing SQL structure
$sql = "INSERT INTO users (fullname, student_id_no, college, department, username, password, role) 
        VALUES ('$fn', '$sid', '$cl', '$dp', '$un', '$pw', 'student')";

if(mysqli_query($conn, $sql)) {
    header("Location: ../login/login.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>