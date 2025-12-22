<?php require_once '../../config/auth.php'; requireLogin(); include '../includes/header.php'; include '../includes/nav.php'; ?>
<div class="card-container">
    <a href="../feedback/feedbackForm.php?cat=Instructor" class="card"><h3>Instructor</h3></a>
    <a href="../feedback/feedbackForm.php?cat=Dorm" class="card"><h3>Dormitory</h3></a>
    <a href="../feedback/feedbackForm.php?cat=Cafeteria" class="card"><h3>Cafeteria</h3></a>
</div>
<?php include '../includes/footer.php'; ?>