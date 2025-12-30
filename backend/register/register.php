<?php 
session_start();
include '../includes/header.php'; 
?>

<div class="center-box">
    <h2>Student Registration</h2>

    <?php if (isset($_SESSION['reg_error'])): ?>
        <div class="error-msg">
            <?php 
                echo $_SESSION['reg_error']; 
                unset($_SESSION['reg_error']); 
            ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="registerHandler.php" onsubmit="validateRegister(event)">
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="text" name="student_id" placeholder="WCU164888" required>
        
        <select name="college" required>
            <option value=""> Select Your College </option>
            <option value="Engineering and Technology">Engineering and Technology</option>
            <option value="Natural and Computational Sciences">Natural and Computational Sciences</option>
            <option value="Medicine and Health Sciences">Medicine and Health Sciences</option>
            <option value="Agricultural Sciences">Agricultural Sciences</option>
            <option value="Business and Economics">Business and Economics</option>
            <option value="Social Sciences and Humanities">Social Sciences and Humanities</option>
            <option value="Education & Behavioral Sciences">Education & Behavioral Sciences</option>
        </select>

        <select name="dept" required style="max-height: 200px;">
            <option value=""> Select Your Department </option>
                <option value="BSc. in Architecture">BSc. in Architecture</option>
                <option value="BSc. in Chemical Engineering">BSc. in Chemical Engineering</option>
                <option value="BSc. in Civil Engineering">BSc. in Civil Engineering</option>
                <option value="BSc. in Computer Science">BSc. in Computer Science</option>
                <option value="BSc. in Construction Technology and Management">BSc. in Construction Technology and Management</option>
                <option value="BSc. in Electrical and Computer Engineering">BSc. in Electrical and Computer Engineering</option>
                <option value="BSc. in Electro-Mechanical Engineering">BSc. in Electro-Mechanical Engineering</option>
                <option value="BSc. in Surveying Engineering">BSc. in Surveying Engineering</option>
                <option value="BSc. in Information System(IS)">BSc. in Information System(IS)</option>
                <option value="BSc. in Information Technology(IT)">BSc. in Information Technology(IT)</option>
                <option value="BSc. in Mechanical Engineering">BSc. in Mechanical Engineering</option>
                <option value="BSc. in Software Engineering">BSc. in Software Engineering</option>
                <option value="BSc in Hydraulic and Water Resource Engineering">BSc in Hydraulic and Water Resource Engineering</option>
                <option value="BSc in Biomedical Engineering">BSc in Biomedical Engineering</option>
        </select>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
        <button type="submit" class="btn">Register</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>


