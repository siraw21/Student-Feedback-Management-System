<?php 
    require_once '../../config/auth.php'; 
    requireLogin(); 
    include '../includes/nav.php'; 
    $cat = $_GET['cat'] ?? 'General';


    $target_label = "Name/Identification";
    $qs = [];

    if ($cat == "Instructor") {
        $target_label = "Lecturer Name";
        $qs = [
                "Explains course overall objectives", 
                "Entertains questions raised in the class room",
                "Ethics, behavior, and commitment", 
                "Allows students to interact during class room", 
                "informs consultation", 
                "Gives time for practical sessions", 
                "Overall effectiveness"
            ];
    } elseif ($cat == "Dorm") {
        $target_label = "Dorm Block/Room";
        $qs = [
                "Block Cleanliness", 
                "Utility Supply (Water/Light)", 
                "Safety & Security", 
                "peace Environment", 
                "Maintenance Speed", 
                "Staff Behavior", 
                "Overall Comfort"
            ];
    } elseif ($cat == "Cafeteria") {
        $target_label = "Cafeteria Name";
        $qs = [
                "Food Quality", 
                "Dining Hygiene", 
                "Portion Sizes", 
                "Service Speed", 
                "Staff Politeness", 
                "Seating Availability", 
                "Overall Experience"
            ];
    } else {
        $qs = [
                "Quality 1", 
                "Quality 2", 
                "Quality 3", 
                "Quality 4", 
                "Quality 5", 
                "Quality 6", 
                "Overall Score"
            ];
    }
?>

<link rel="stylesheet" href="../../client/css/forms.css">
 <div style="margin-top:20px;margin-left: 20%">
        <a href="../dashboard/studentDash.php" class="btn" style="text-decoration:none; padding: 10px 20px; background:#6c757d; color:white; border-radius:5px;">
             ⬅️
        </a>
    </div>
<div class="feedback-card">
    <h2><?php echo $cat; ?> Feedback Form</h2>
    <form method="POST" action="submitFeedback.php">
        <input type="hidden" name="category" value="<?php echo $cat; ?>">

        <div class="target-section">
            <p><strong>Target of Feedback: <?php echo $target_label; ?></strong></p>
            <input type="text" name="target_name" class="target-input" placeholder="e.g. <?php echo $target_label; ?>..." required>
        </div>

        <?php foreach($qs as $i => $q): $n = $i + 1; ?>
        <div class="question-row">
            <p class="question-text"><strong><?php echo $n . ". " . $q; ?></strong></p>
            <div class="rating-options">
                <label><input type="radio" name="q<?php echo $n; ?>" value="1" required> 1 (Very Low)</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="2"> 2 (Low)</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="3"> 3 (Medium)</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="4"> 4 (high)</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="5"> 5 (Excellent)</label>
            </div>
        </div>
        <?php endforeach; ?>

        <div style="margin-top: 20px;">
            <p><strong>Additional Comments:</strong></p>
            <textarea name="comments" class="comment-box" rows="4" placeholder="Share more details here..."></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Feedback</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>