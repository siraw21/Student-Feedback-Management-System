<?php 
    require_once '../../config/auth.php';
    requireLogin();
    include '../includes/nav.php'; 
    // include '../includes/header.php'; 
?>
 <h2 class="dash-heading">Chose Category!</h2>
<div class="card-container">
    <a href="../feedback/feedbackForm.php?cat=Instructor" class="card">
        <h3>Instructor</h3>
        <p>Rate teaching quality</p>
    </a>

    <a href="../feedback/feedbackForm.php?cat=Dorm" class="card">
        <h3>Dormitory</h3>
        <p>Review housing facilities</p>
    </a>

    <a href="../feedback/feedbackForm.php?cat=Cafeteria" class="card">
        <h3>Cafeteria</h3>
        <p>Rate food and service</p>
    </a>
</div>
<?php include '../includes/footer.php'; ?>