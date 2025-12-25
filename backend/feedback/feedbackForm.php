<?php 
require_once '../../config/auth.php'; 
requireLogin(); 
include '../includes/nav.php'; 

$cat = isset($_GET['cat']) ? $_GET['cat'] : 'General';
// Questions adapted to your 10-question requirement
$qs = [
    "Q1: Punctuality and Time Management",
    "Q2: Quality of service/teaching provided",
    "Q3: Availability of resources and materials",
    "Q4: Communication and clarity",
    "Q5: Problem-solving and support",
    "Q6: Professionalism and behavior",
    "Q7: Safety and security measures",
    "Q8: Cleanliness and hygiene",
    "Q9: Consistency of service",
    "Q10: Overall satisfaction level"
];
?>

<div class="center-box" style="width: 700px;">
    <h2><?php echo $cat; ?> Feedback Form</h2>
    <form method="POST" action="submitFeedback.php" onsubmit="validateFeedback(event)">
        <input type="hidden" name="category" value="<?php echo $cat; ?>">

        <?php foreach($qs as $i => $q): $n = $i + 1; ?>
        <div class="question-block">
            <p class="question-text"><strong><?php echo $q; ?></strong></p>
            <div class="radio-group">
                <label><input type="radio" name="q<?php echo $n; ?>" value="None" required> None</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="Low"> Low</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="Medium"> Medium</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="High"> High</label>
                <label><input type="radio" name="q<?php echo $n; ?>" value="Very High"> Very High</label>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="question-block">
            <p class="question-text"><strong>Additional Comments</strong></p>
            <textarea name="comments" placeholder="Tell us more..."></textarea>
        </div>

        <button type="submit" class="btn">Submit Feedback</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>