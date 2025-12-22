<?php require_once '../../config/auth.php'; require_once '../../config/db.php'; requireRole('admin'); include '../includes/header.php'; ?>
<div style="padding:20px;">
    <table class="admin-table">
        <tr><th>Student</th><th>ID</th><th>College</th><th>Category</th><th>Comments</th></tr>
        <?php
        $res = mysqli_query($conn, "SELECT f.*, u.fullname, u.student_id_no, u.college FROM feedback f JOIN users u ON f.user_id = u.id");
        while($r = mysqli_fetch_assoc($res)) {
            echo "<tr><td>{$r['fullname']}</td><td>{$r['student_id_no']}</td><td>{$r['college']}</td><td>{$r['category']}</td><td>{$r['comments']}</td></tr>";
        }
        ?>
    </table>
    <br><a href="../dashboard/adminDash.php" class="btn">Back to Dashboard</a>
</div>