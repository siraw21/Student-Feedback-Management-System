<?php include '../includes/header.php'; ?>
<div class="center-box">
    <h2>Student Registration</h2>
    <form method="POST" action="registerHandler.php" onsubmit="validateRegister(event)">
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="text" name="student_id" placeholder="WCU164888" required>
        <input type="text" name="college" placeholder="College" required>
        <input type="text" name="dept" placeholder="Department" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn">Register</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>