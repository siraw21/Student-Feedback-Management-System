 <?php
    // include '../includes/header.php'; 
    // include '../includes/nav.php'; 
  ?>
<!-- <div class="center-box">
    <h2>Login</h2>
    <form method="POST" action="loginHandler.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn">Login</button>
    </form>
    <p>New? <a href="../register/register.php">Register here</a></p>
</div> -->
<?
// php include '../includes/footer.php';
 ?>

 <?php 
session_start();
include '../includes/header.php'; 
?>

<div class="center-box">
    <h2>Login</h2>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="error-msg">
            <?php 
                echo $_SESSION['error'];  
                unset($_SESSION['error']); // Clear after showing
            ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="loginHandler.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn">Sign In</button>
    </form>
    <p>Don't have an account? <a href="../register/register.php">Register</a></p>
</div>

<?php include '../includes/footer.php'; ?>