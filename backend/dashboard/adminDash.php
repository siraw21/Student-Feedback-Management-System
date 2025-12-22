<?php 
    require_once '../../config/auth.php'; 
    require_once '../../config/db.php'; 
    requireRole('admin'); 
    include '../includes/header.php'; 
    include '../includes/nav.php'; 
?>

<div style="padding:40px;">
    <h2>Admin Dashboard - Student Responses</h2>
    <a href="../feedback/viewFeedback.php" class="btn" style="width:200px; text-decoration:none;">Refresh View</a>
</div>

<?php include '../includes/footer.php'; ?>