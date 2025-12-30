<?php 
    require_once '../../config/auth.php'; 
    require_once '../../config/db.php'; 
    requireRole('admin'); 
    include '../includes/nav.php'; 
?>

<div class="container" style="padding:40px;">
    <h2 style="text-align:center; margin-bottom:30px;">Admin Management Console</h2>
    
    <div class="card-container">
        <a href="../feedback/viewFeedback.php" class="card">
            <div style="font-size: 40px;">📋</div>
            <h3>Detailed Responses</h3>
            <p>View specific ratings for Lecturers, Dorms, and Cafeterias.</p>
        </a>

        <!-- <a href="manageUsers.php" class="card">
            <div style="font-size: 40px;">👥</div>
            <h3>Manage Users</h3>
            <p>View registered students and staff members.</p>
        </a> -->
    </div>
</div>