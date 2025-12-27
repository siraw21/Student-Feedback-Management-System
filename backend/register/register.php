<?php 
// include '../includes/header.php'; 
?>
<!-- <div class="center-box">
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
</div> -->
<?php 
// include '../includes/footer.php'; ?>

<?php include '../includes/header.php'; ?>
<div class="center-box">
    <h2>Student Registration</h2>
    <form method="POST" action="registerHandler.php" onsubmit="validateRegister(event)">
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="text" name="student_id" placeholder="WCU164888" required>
        
        <select name="college" required>
            <option value="">-- Select Your College --</option>
            <option value="Engineering and Technology">Engineering and Technology</option>
            <option value="Natural and Computational Sciences">Natural and Computational Sciences</option>
            <option value="Medicine and Health Sciences">Medicine and Health Sciences</option>
            <option value="Agricultural Sciences">Agricultural Sciences</option>
            <option value="Business and Economics">Business and Economics</option>
            <option value="Social Sciences and Humanities">Social Sciences and Humanities</option>
            <option value="Education & Behavioral Sciences">Education & Behavioral Sciences</option>
        </select>

        <select name="dept" required>
            <option value="">-- Select Your Department --</option>
            
            <optgroup label="Engineering and Technology">
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
            </optgroup>

            <optgroup label="Natural and Computational Sciences">
                <option value="BSc in Biology">BSc in Biology</option>
                <option value="BSc in Chemistry">BSc in Chemistry</option>
                <option value="BSc in Mathematics">BSc in Mathematics</option>
                <option value="BSc in Statistics">BSc in Statistics</option>
                <option value="BSc in Biotechnology">BSc in Biotechnology</option>
                <option value="BSc in Geology">BSc in Geology</option>
                <option value="BSc in Sport Science">BSc in Sport Science</option>
                <option value="BSc in Industrial Chemistry">BSc in Industrial Chemistry</option>
            </optgroup>

            <optgroup label="Medicine and Health Sciences">
                <option value="BSc in Anesthesia">BSc in Anesthesia</option>
                <option value="BSc in Medicine">BSc in Medicine</option>
                <option value="BSc in Midwifery">BSc in Midwifery</option>
                <option value="BSc in Comprehensive Nursing">BSc in Comprehensive Nursing</option>
                <option value="BSc in Public Health">BSc in Public Health</option>
                <option value="BSc in Health Informatics">BSc in Health Informatics</option>
                <option value="BSc in Medical Laboratory Technology">BSc in Medical Laboratory Technology</option>
                <option value="BSc in Pharmacy">BSc in Pharmacy</option>
                <option value="BSc in Surgical Nursing(PB)">BSc in Surgical Nursing(PB)</option>
                <option value="BSc in Paediatrics & Chilled Health Nursing (PB)">BSc in Paediatrics & Chilled Health Nursing (PB)</option>
                <option value="BSc in Dental Medicine">BSc in Dental Medicine</option>
            </optgroup>

            <optgroup label="Agricultural Sciences">
                <option value="BSc in Animal Science">BSc in Animal Science</option>
                <option value="BSc in Horticulture">BSc in Horticulture</option>
                <option value="BSc in Natural Resource Management">BSc in Natural Resource Management</option>
                <option value="BSc in Plant Science">BSc in Plant Science</option>
                <option value="BSc in Environmental Science">BSc in Environmental Science</option>
                <option value="BSc in Food Science and Postharvest Technology">BSc in Food Science and Postharvest Technology</option>
                <option value="BSc in Agro Economics">BSc in Agro Economics</option>
                <option value="BSc in Rural Development & Agricultural Extension">BSc in Rural Development & Agricultural Extension</option>
            </optgroup>
        </select>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn">Register</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>