<?php require_once '../../config/auth.php'; requireLogin(); include '../includes/header.php'; 
$cat = $_GET['cat'];
$qs = ["Q1: Punctuality", "Q2: Knowledge", "Q3: Support", "Q4: Fairness", "Q5: Clarity", "Q6: Materials", "Q7: Safety", "Q8: Cleanliness", "Q9: Quality", "Q10: Overall"];
?>
<div class="center-box" style="width:600px;">
    <h2><?php echo $cat; ?> Feedback</h2>
    <form method="POST" action="submitFeedback.php" onsubmit="return confirmSubmit()">
        <input type="hidden" name="category" value="<?php echo $cat; ?>">
        <?php foreach($qs as $i=>$q): ?>
            <p><?php echo $q; ?></p>
            <input type="radio" name="q<?php echo $i+1; ?>" value="1" required> Low
            <input type="radio" name="q<?php echo $i+1; ?>" value="3"> Medium
            <input type="radio" name="q<?php echo $i+1; ?>" value="5"> High
        <?php endforeach; ?>
        <textarea name="comments" placeholder="Comments"></textarea>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>